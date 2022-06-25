<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrCastRequest;
use App\Models\Definition\HumanResource\HrCast;

class HrCastController extends Controller
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
        $this->authorize('view', HrCast::class);
        $records = HrCast::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.cast'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.cast.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrCast::class);
        $params = [
            'pageTitle' => __('general.new_cast'),
        ];

        return view('dashboard.real-estate.definition.cast.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrCastRequest $request)
    {
        $this->authorize('create', HrCast::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.cast.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.cast.index')
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
        $this->authorize('view', HrCast::class);
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
        $this->authorize('update', HrCast::class);
        $model = HrCast::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_cast'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.cast.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrCastRequest $request, $id)
    {
        $this->authorize('update', HrCast::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.cast.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrCastRequest $request,$id)
    {
        $this->authorize('delete', HrCast::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.cast.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
