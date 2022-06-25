<?php

namespace App\Http\Controllers\RealEstate\FixedAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FixedAssets\AssetsLocationRequest;
use App\Models\FixedAssets\AssetsLocation;

class AssetsLocationController extends Controller
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
        $this->authorize('view', AssetsLocation::class);
        $records = AssetsLocation::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.assets_location_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.fixed-assets.assets-location.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', AssetsLocation::class);
        $params = [
            'pageTitle' => __('general.assets_location_create'),
        ];

        return view('dashboard.real-estate.fixed-assets.assets-location.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AssetsLocationRequest $request)
    {
        $this->authorize('create', AssetsLocation::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.assets-location.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.assets-location.index')
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
        $this->authorize('view', AssetsLocation::class);
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
        $this->authorize('update', AssetsLocation::class);
        $model = AssetsLocation::findorFail($id);

        $params = [
            'pageTitle' => __('general.assets_location_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.fixed-assets.assets-location.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AssetsLocationRequest $request, int $id)
    {
        $this->authorize('update', AssetsLocation::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.assets-location.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(AssetsLocationRequest $request,int $id)
    {
        $this->authorize('delete', AssetsLocation::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.assets-location.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
