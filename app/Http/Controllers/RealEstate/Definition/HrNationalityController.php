<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrNationalityRequest;
use App\Models\Definition\HumanResource\HrNationality;

class HrNationalityController extends Controller
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
        $this->authorize('view', HrNationality::class);
        $records = HrNationality::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.nationality'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.nationality.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrNationality::class);
        $params = [
            'pageTitle' => __('general.new_nationality'),
        ];
        return view('dashboard.real-estate.definition.nationality.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrNationalityRequest $request)
    {
        $this->authorize('create', HrNationality::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.nationality.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.nationality.index')
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
        $this->authorize('view', HrNationality::class);
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
        $this->authorize('update', HrNationality::class);
        $model = HrNationality::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_nationality'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.nationality.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrNationalityRequest $request, $id)
    {
        $this->authorize('update', HrNationality::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.nationality.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrNationalityRequest $request,$id)
    {
        $this->authorize('delete', HrNationality::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.nationality.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
