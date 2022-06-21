<?php

namespace App\Http\Controllers\RealEstate\FixedAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FixedAssets\AssetsInventoryRequest;
use App\Models\RealEstate\FixedAssets\AssetsInventory;
use App\Traits\General;
use Illuminate\Http\Request;

class AssetsInventoryController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('fixed-assets');
        $this->makeMultipleDirectories('fixed-assets', ['documents']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', AssetsInventory::class);
        $records = AssetsInventory::with('assetsUnit','hr','assetsLocation')->orderBy('asset_name','ASC')->get();
        $params = [
            'pageTitle' => __('general.assets_inventory_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.fixed-assets.assets-inventory.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', AssetsInventory::class);
        $params = [
            'pageTitle' => __('general.assets_inventory_create'),
        ];

        return view('dashboard.real-estate.fixed-assets.assets-inventory.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AssetsInventoryRequest $request)
    {
        $this->authorize('create', AssetsInventory::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.assets-inventory.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.assets-inventory.index')
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
        $this->authorize('view', AssetsInventory::class);
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
        $this->authorize('update', AssetsInventory::class);
        $model = AssetsInventory::findorFail($id);

        $params = [
            'pageTitle' => __('general.assets_inventory_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.fixed-assets.assets-inventory.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AssetsInventoryRequest $request, int $id)
    {
        $this->authorize('update', AssetsInventory::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.assets-inventory.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(AssetsInventoryRequest $request,int $id)
    {
        $this->authorize('delete', AssetsInventory::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.assets-inventory.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
