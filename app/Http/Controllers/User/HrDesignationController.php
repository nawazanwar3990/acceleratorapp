<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrDesignationRequest;
use App\Models\UserManagement\HrDesignation;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class HrDesignationController extends Controller
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
        $this->authorize('view', HrDesignation::class);
        $records = HrDesignation::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.designation'),
            'records' => $records,
        ];
        return view('dashboard.user-management.designation.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', HrDesignation::class);
        $params = [
            'pageTitle' => __('general.new_designation'),
        ];

        return view('dashboard.user-management.designation.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(HrDesignationRequest $request)
    {
        $this->authorize('create', HrDesignation::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.designation.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', HrDesignation::class);
        $model = HrDesignation::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_designation'),
            'model' => $model,
        ];
        return view('dashboard.user-management.designation.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(HrDesignationRequest $request, $id)
    {
        $this->authorize('update', HrDesignation::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.designation.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(HrDesignationRequest $request, $id)
    {
        $this->authorize('delete', HrDesignation::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.designation.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
