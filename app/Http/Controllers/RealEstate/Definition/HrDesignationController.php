<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrDesignationRequest;
use App\Models\Definition\HumanResource\HrDesignation;

class HrDesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', HrDesignation::class);
        $records = HrDesignation::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.designation'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.designation.index', $params);
    }

    public function create()
    {
        $this->authorize('create', HrDesignation::class);
        $params = [
            'pageTitle' => __('general.new_designation'),
        ];

        return view('dashboard.real-estate.definition.designation.create', $params);
    }

    public function store(HrDesignationRequest $request)
    {
        $this->authorize('create', HrDesignation::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.designation.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.designation.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', HrDesignation::class);
        //
    }

    public function edit($id)
    {
        $this->authorize('update', HrDesignation::class);
        $model = HrDesignation::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_designation'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.designation.edit', $params);
    }

    public function update(HrDesignationRequest $request, $id)
    {
        $this->authorize('update', HrDesignation::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.designation.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(HrDesignationRequest $request, $id)
    {
        $this->authorize('delete', HrDesignation::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.designation.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
