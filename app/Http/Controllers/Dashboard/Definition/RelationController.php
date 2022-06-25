<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\RelationRequest;
use App\Models\Definition\HumanResource\HrRelation;
use function __;
use function redirect;
use function view;

class RelationController extends Controller
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
        $this->authorize('view', HrRelation::class);
        $records = HrRelation::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.relation'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.relation.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrRelation::class);
        $params = [
            'pageTitle' => __('general.new_relation'),
        ];

        return view('dashboard.real-estate.definition.relation.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RelationRequest $request)
    {
        $this->authorize('create', HrRelation::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.relation.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.relation.index')
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
        $this->authorize('view', HrRelation::class);
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
        $this->authorize('update', HrRelation::class);
        $model = HrRelation::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_relation'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.relation.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RelationRequest $request, $id)
    {
        $this->authorize('update', HrRelation::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.relation.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(RelationRequest $request,$id)
    {
        $this->authorize('delete', HrRelation::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.relation.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
