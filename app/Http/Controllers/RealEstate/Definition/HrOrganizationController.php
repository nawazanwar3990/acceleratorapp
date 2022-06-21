<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrOrganizationRequest;
use App\Models\RealEstate\Definition\HumanResource\HrOrganization;
use Illuminate\Http\Request;

class HrOrganizationController extends Controller
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
        $this->authorize('view', HrOrganization::class);
        $records = HrOrganization::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.organization'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.organization.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrOrganization::class);
        $params = [
            'pageTitle' => __('general.new_organization'),
        ];

        return view('dashboard.real-estate.definition.organization.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrOrganizationRequest $request)
    {
        $this->authorize('create', HrOrganization::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.organization.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.organization.index')
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
        $this->authorize('view', HrOrganization::class);
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
        $this->authorize('update', HrOrganization::class);
        $model = HrOrganization::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_organization'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.organization.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrOrganizationRequest $request,$id)
    {
        $this->authorize('delete', HrOrganization::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.organization.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
