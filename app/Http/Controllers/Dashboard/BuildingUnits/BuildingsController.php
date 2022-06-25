<?php

namespace App\Http\Controllers\Dashboard\BuildingUnits;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\BuildingUnits\BuildingRequest;
use App\Models\Building;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function session;
use function view;

class BuildingsController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('buildings');
        $this->makeMultipleDirectories('buildings', ['documents', 'images']);
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', Building::class);
        $records = Building::where('business_id', session()->get('businessID'))
            ->orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.buildings'),
            'records' => $records,
        ];

        return view('dashboard.buildings.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Building::class);
        $params = [
            'pageTitle' => __('general.new_building'),
        ];

        return view('dashboard.buildings.create', $params);
    }

    public function store(BuildingRequest $request)
    {
        $this->authorize('create', Building::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.buildings.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.buildings.index')
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
        $this->authorize('update', Building::class);
        $model = Building::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_building'),
            'model' => $model,
        ];

        return view('dashboard.buildings.edit', $params);
    }

    public function update(BuildingRequest $request, $id)
    {
        $this->authorize('update', Building::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.buildings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(BuildingRequest $request, $id)
    {
        $this->authorize('delete', Building::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.buildings.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function changeBuilding(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $buildingID = $request->get('buildingID');
        $building = Building::where('business_id', session()->get('businessID'))
            ->find($buildingID);
        if ($building) {
            session()->put('bId', $building->id);
            session()->put('bName', $building->name);
            $output = ['success' => true, 'msg' => ''];
        }

        return $output;
    }

    public function getFloorsOfBuilding(Request $request) {
        return BuildingService::getFloorsOfBuildingForJS($request);
    }
}
