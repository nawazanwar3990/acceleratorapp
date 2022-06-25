<?php

namespace App\Http\Controllers\Dashboard\FixedAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FixedAssets\AssetsUnitRequest;
use App\Models\FixedAssets\AssetsUnit;
use function __;
use function redirect;
use function view;

class AssetsUnitController extends Controller
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
        $this->authorize('view', AssetsUnit::class);
        $records = AssetsUnit::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.assets_unit_list'),
            'records' => $records,
        ];
        return view('dashboard.fixed-assets.assets-unit.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', AssetsUnit::class);
        $params = [
            'pageTitle' => __('general.assets_unit_create'),
        ];

        return view('dashboard.fixed-assets.assets-unit.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AssetsUnitRequest $request)
    {
        $this->authorize('create', AssetsUnit::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.assets-unit.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.assets-unit.index')
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
        $this->authorize('view', AssetsUnit::class);
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
        $this->authorize('update', AssetsUnit::class);
        $model = AssetsUnit::findorFail($id);

        $params = [
            'pageTitle' => __('general.assets_unit_edit'),
            'model' => $model,
        ];

        return view('dashboard.fixed-assets.assets-unit.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AssetsUnitRequest $request, $id)
    {
        $this->authorize('update', AssetsUnit::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.assets-unit.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(AssetsUnitRequest $request, int $id)
    {
        $this->authorize('delete', AssetsUnit::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.assets-unit.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
