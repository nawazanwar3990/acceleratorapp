<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Hr;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function __;
use function auth;
use function redirect;
use function view;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::VIEW, User::class);
        $records = User::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.users'),
            'records' => $records,
        ];
        return view('dashboard.user-management.users.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, User::class);
        $persons = Hr::with('user')->get();
        $params = [
            'pageTitle' => __('general.new_users'),
            'persons' => $persons
        ];
        return view('dashboard.user-management.users.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(Request $request): JsonResponse
    {
        $this->authorize(AbilityEnum::CREATE, User::class);
        $person_id = $request->input('person_id', null);
        $person = Hr::find($person_id);
        $email = $person->email;
        $userQuery = User::onlyTrashed()->where('email', $email);
        $state = $request->input('state', null);
        if ($state == 'add') {

            if ($userQuery->exists()) {
                $user = $userQuery->first();
                $user->restore();
                $user->updated_by = auth()->id();
                $user->save();
            } else {
                $user = new User();
                $user->first_name = $person->first_name;
                $user->middle_name = $person->middle_name;
                $user->last_name = $person->last_name;
                $user->user_name = uniqid();
                $user->password = Hash::make('user1234');
                $user->email = $email ?? uniqid() . "@gmail.com";
                $user->normal_password = 'user1234';
                $user->active = true;
                $user->hr_id = $person->id;
                $user->created_by = auth()->id();
                $user->save();
            }
            $person->user_id = $user->id;
            $person->save();

        } else {

            $user = User::find($person->user_id);
            $user->delete();

            $person->user_id = null;
            $person->save();

        }
        return \response()->json([
            'status' => $state
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(UserRequest $request, User $user): RedirectResponse
    {
        $this->authorize(AbilityEnum::DELETE, User::class);
        $request->deleteData($user);
        return redirect()->route('dashboard.users.index')
            ->with('success', __('general.record_deleted_successfully'));
    }
}
