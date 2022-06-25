<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Definition\HrTaxTypeRequest;
use App\Models\Definition\HumanResource\HrTaxType;
use function __;
use function redirect;
use function view;

class HrTaxTypeController extends Controller
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
        $this->authorize('view', HrTaxType::class);
        $records = HrTaxType::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.tax_type'),
            'records' => $records,
        ];
        return view('dashboard.definition.tax-type.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrTaxType::class);
        $params = [
            'pageTitle' => __('general.new_tax_type'),
        ];

        return view('dashboard.definition.tax-type.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrTaxTypeRequest $request)
    {
        $this->authorize('create', HrTaxType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.tax-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.tax-type.index')
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
        $this->authorize('view', HrTaxType::class);
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
        $this->authorize('update', HrTaxType::class);
        $model = HrTaxType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_tax_type'),
            'model' => $model,
        ];

        return view('dashboard.definition.tax-type.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrTaxTypeRequest $request, $id)
    {
        $this->authorize('update', HrTaxType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.tax-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrTaxTypeRequest $request,$id)
    {
        $this->authorize('delete', HrTaxType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.tax-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
