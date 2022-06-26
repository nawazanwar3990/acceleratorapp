<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrDepartmentRequest;
use App\Models\UserManagement\HrDepartment;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class HrDepartmentController extends Controller
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
        $this->authorize('view', HrDepartment::class);
        $records = HrDepartment::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.department'),
            'records' => $records,
        ];
        return view('dashboard.user-management.department.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', HrDepartment::class);
        $params = [
            'pageTitle' => __('general.new_department'),
        ];

        return view('dashboard.user-management.department.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(HrDepartmentRequest $request)
    {
        $this->authorize('create', HrDepartment::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.department.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', HrDepartment::class);
        $model = HrDepartment::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_department'),
            'model' => $model,
        ];
        return view('dashboard.user-management.department.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(HrDepartmentRequest $request, $id)
    {
        $this->authorize('update', HrDepartment::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.department.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(HrDepartmentRequest $request, $id)
    {
        $this->authorize('delete', HrDepartment::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.department.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
