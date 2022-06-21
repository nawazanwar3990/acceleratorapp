<?php

namespace App\Http\Controllers\RealEstate\BuildingUnits;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\BuildingUnits\FloorRequest;
use App\Models\RealEstate\Building;
use App\Models\RealEstate\BuildingServices;
use App\Models\RealEstate\Floor;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\FloorService;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', Floor::class);
        $records = Floor::whereBuildingId(BuildingService::getBuildingId())->orderBy('floor_name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floors'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.floor.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Floor::class);
        $params = [
            'pageTitle' => __('general.new_floor'),
        ];

        return view('dashboard.real-estate.floor.create', $params);
    }

    public function store(FloorRequest $request)
    {
        $this->authorize('create', Floor::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.floors.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.floors.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->authorize('update', Floor::class);

        $model = Floor::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_floor'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.floor.edit', $params);
    }

    public function update(FloorRequest $request, $id)
    {
        $this->authorize('update', Floor::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(FloorRequest $request, $id)
    {
        $this->authorize('delete', Floor::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getFlatsOfFloor(Request $request) {
        return FloorService::getFlatsOfFloorForJS($request);
    }

    public function getFloorDetails(Request $request) {
        return FloorService::getFloorDetailsForJS($request);
    }
}
