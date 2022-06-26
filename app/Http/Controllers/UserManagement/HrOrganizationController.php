<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrOrganizationRequest;
use App\Models\UserManagement\HrOrganization;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class HrOrganizationController extends Controller
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
        $this->authorize('view', HrOrganization::class);
        $records = HrOrganization::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.organization'),
            'records' => $records,
        ];
        return view('dashboard.user-management.organization.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', HrOrganization::class);
        $params = [
            'pageTitle' => __('general.new_organization'),
        ];

        return view('dashboard.user-management.organization.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(HrOrganizationRequest $request)
    {
        $this->authorize('create', HrOrganization::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.organization.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', HrOrganization::class);
        $model = HrOrganization::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_organization'),
            'model' => $model,
        ];

        return view('dashboard.user-management.organization.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(HrOrganizationRequest $request, $id)
    {
        $this->authorize('update', HrOrganization::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.organization.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(HrOrganizationRequest $request, $id)
    {
        $this->authorize('delete', HrOrganization::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.organization.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
