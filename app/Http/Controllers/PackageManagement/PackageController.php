<?php

namespace App\Http\Controllers\PackageManagement;

use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageManagement\PackageRequest;
use App\Http\Requests\WorkingSpace\FlatRequest;
use App\Models\PackageManagement\Package;
use App\Models\WorkingSpace\Flat;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function view;

class PackageController extends Controller
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
        $this->authorize('view', Package::class);
        $records = Package::with('duration_type', 'modules');
        if (Auth::user()->hasRole(RoleEnum::ADMIN)) {
            $records = $records->whereHas('subscriptions', function ($q) {
                $q->subscribed_id = Auth::id();
            });
        } else {
            $records = $records->where('created_by', auth()->id());
        }
        $records = $records->paginate(20);
        $params = [
            'pageTitle' => __('general.packages'),
            'records' => $records,
        ];
        return view('dashboard.package-management.packages.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Package::class);
        $params = [
            'pageTitle' => __('general.new_package'),
        ];
        return view('dashboard.package-management.packages.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(PackageRequest $request)
    {
        $this->authorize('create', Package::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.packages.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Package::class);
        $model = Package::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_package'),
            'model' => $model,
        ];

        return view('dashboard.package-management.packages.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(PackageRequest $request, $id)
    {
        $this->authorize('update', Package::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.packages.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(PackageRequest $request, $id)
    {
        $this->authorize('delete', Package::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.packages.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
