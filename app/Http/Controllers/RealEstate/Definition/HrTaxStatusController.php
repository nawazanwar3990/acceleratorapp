<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrTaxStatusRequest;
use App\Models\RealEstate\Definition\HumanResource\HrTaxStatus;
use Illuminate\Http\Request;

class HrTaxStatusController extends Controller
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
        $this->authorize('view', HrTaxStatus::class);
        $records = HrTaxStatus::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.tax_status'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.tax-status.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrTaxStatus::class);
        $params = [
            'pageTitle' => __('general.new_tax_status'),
        ];

        return view('dashboard.real-estate.definition.tax-status.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrTaxStatusRequest $request)
    {
        $this->authorize('create', HrTaxStatus::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.tax-status.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.tax-status.index')
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
        $this->authorize('view', HrTaxStatus::class);
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
        $this->authorize('update', HrTaxStatus::class);
        $model = HrTaxStatus::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_tax_status'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.tax-status.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrTaxStatusRequest $request, $id)
    {
        $this->authorize('update', HrTaxStatus::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.tax-status.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrTaxStatusRequest $request,$id)
    {
        $this->authorize('delete', HrTaxStatus::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.tax-status.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
