<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\CommodityTypeRequest;
use App\Models\RealEstate\Definition\General\CommodityType;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\CommodityService;
use Illuminate\Http\Request;

class CommodityTypeController extends Controller
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
        $this->authorize('view', CommodityType::class);
        $records = CommodityType::whereBuildingId(BuildingService::getBuildingId())->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.commodity'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.definition.commodity-type.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', CommodityType::class);
        $parentHeads = CommodityType::whereBuildingId(BuildingService::getBuildingId())->whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $params = [
            'pageTitle' => __('general.new_commodity_type'),
            'parentHeads' => $parentHeads,
        ];

        return view('dashboard.real-estate.definition.commodity-type.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommodityTypeRequest $request)
    {
        $this->authorize('create', CommodityType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.commodity-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.commodity-type.index')
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
        $this->authorize('view', CommodityType::class);
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
        $this->authorize('update', CommodityType::class);
        $parentHeads = CommodityType::whereBuildingId(BuildingService::getBuildingId())->whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $model = CommodityType::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_commodity_type'),
            'parentHeads' => $parentHeads,
            'model' => $model,
        ];
        return view('dashboard.real-estate.definition.commodity-type.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommodityTypeRequest $request, $id)
    {
        $this->authorize('update', CommodityType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.commodity-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CommodityTypeRequest $request,$id)
    {
        $this->authorize('delete', CommodityType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.commodity-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getCommoditySubTypes(Request $request) {
        return CommodityService::getCommoditySubTypesForJS($request);
    }
}
