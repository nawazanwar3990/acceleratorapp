<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Definition\HrEmployeeTypeRequest;
use App\Models\Definition\HumanResource\HrEmployeeType;
use function __;
use function redirect;
use function view;

class HrEmployeeTypeController extends Controller
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
        $this->authorize('view', HrEmployeeType::class);
        $records = HrEmployeeType::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.employee_type'),
            'records' => $records,
        ];

        return view('dashboard.definition.employment.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrEmployeeType::class);
        $parentHeads = HrEmployeeType::whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $params = [
            'pageTitle' => __('general.new_employee_type'),
            'parentHeads' => $parentHeads,
        ];

        return view('dashboard.definition.employment.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrEmployeeTypeRequest $request)
    {
        $this->authorize('create', HrEmployeeType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.employee-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.employee-type.index')
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
        $this->authorize('view', HrEmployeeType::class);
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
        $this->authorize('update', HrEmployeeType::class);
        $parentHeads = HrEmployeeType::whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $model = HrEmployeeType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_employee_type'),
            'parentHeads' => $parentHeads,
            'model' => $model,
        ];
        return view('dashboard.definition.employment.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrEmployeeTypeRequest $request, $id)
    {
        $this->authorize('update', HrEmployeeType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.employee-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrEmployeeTypeRequest $request,$id)
    {
        $this->authorize('delete', HrEmployeeType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.employee-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
