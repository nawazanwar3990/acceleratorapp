<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrDepartmentRequest;
use App\Models\UserManagement\HrDepartment;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', HrDepartment::class);
        $records = HrDepartment::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.department'),
            'records' => $records,
        ];
        return view('dashboard.definition.department.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrDepartment::class);
        $params = [
            'pageTitle' => __('general.new_department'),
        ];

        return view('dashboard.definition.department.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrDepartmentRequest $request)
    {
        $this->authorize('create', HrDepartment::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.department.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.department.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', HrDepartment::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', HrDepartment::class);
        $model = HrDepartment::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_department'),
            'model' => $model,
        ];

        return view('dashboard.definition.department.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrDepartmentRequest $request,$id)
    {
        $this->authorize('delete', HrDepartment::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.department.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
