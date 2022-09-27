<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\PersonService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(
        private PersonService $personService
    )
    {
        $this->middleware('auth');
    }

    public function edit(Request $request, $id): Factory|View|Application
    {
        $user = $this->personService->findUserById($id);
        $params = [
            'pageTitle' => __('general.edit')." ".$user->getFullName(),
            'user' => $user
        ];
        return view('dashboard.user-management.users.edit', $params);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $user = $this->personService->findUserById($id);
        $user->update($request->all());
        return redirect()->back()->with('success', trans('general.profile_updated_successfully'));
    }
}
