<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrProfessionRequest;
use App\Models\RealEstate\Definition\HumanResource\HrProfession;
use Illuminate\Http\Request;

class HrProfessionController extends Controller
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
        $this->authorize('view', HrProfession::class);
        $records = HrProfession::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.profession'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.profession.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrProfession::class);
        $params = [
            'pageTitle' => __('general.new_profession'),
        ];

        return view('dashboard.real-estate.definition.profession.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrProfessionRequest $request)
    {
        $this->authorize('create', HrProfession::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.profession.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.profession.index')
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
        $this->authorize('view', HrProfession::class);
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
        $this->authorize('update', HrProfession::class);
        $model = HrProfession::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_profession'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.profession.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrProfessionRequest $request, $id)
    {
        $this->authorize('edit', HrProfession::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.profession.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrProfessionRequest $request,$id)
    {
        $this->authorize('delete', HrProfession::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.profession.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
