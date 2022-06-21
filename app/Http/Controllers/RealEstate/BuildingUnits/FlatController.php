<?php

namespace App\Http\Controllers\RealEstate\BuildingUnits;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\BuildingUnits\FlatRequest;
use App\Models\RealEstate\BuildingServices;
use App\Models\RealEstate\Flat;
use App\Models\RealEstate\FlatOwner;
use App\Models\RealEstate\Floor;
use App\Models\RealEstate\HumanResource\Hr;
use App\Models\RealEstate\Sales\Sale;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\FlatService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FlatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', Flat::class);
        $records = Flat::whereBuildingId(BuildingService::getBuildingId())->orderBy('flat_name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.flats_shop'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.flat.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Flat::class);

        $params = [
            'pageTitle' => __('general.new_flat_shop'),
        ];

        return view('dashboard.real-estate.flat.create', $params);
    }

    public function store(FlatRequest $request)
    {
        $this->authorize('create', Flat::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.flats-shops.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.flats-shops.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }


    public function show($id)
    {
        $this->authorize('view', Flat::class);
        $records = FlatOwner::with('Hr','flat')->whereBuildingId(BuildingService::getBuildingId())->findOrFail($id);
//        $model = Hr::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        $params = [
            'pageTitle' => __('general.print_flat_owners'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.print.flat-owner.print-view', $params);
    }

    public function edit($id)
    {
        $this->authorize('update', Flat::class);

        $model = Flat::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);

        if ($model->sales_status <> 'open') {
            abort(404);
        }

        $params = [
            'pageTitle' => __('general.edit_flat_shop'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.flat.edit', $params);
    }

    public function update(FlatRequest $request, $id)
    {
        $this->authorize('update', Flat::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.flats-shops.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(FlatRequest $request, $id)
    {
        $this->authorize('delete', Flat::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.flats-shops.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getFlatDetails(Request $request) {
        return FlatService::getFlatDetailsForJS($request);
    }

    public function getFlatOwners(Request $request) {
        return FlatService::getFlatOwnersForTable($request);
    }

    public function getFlatRevisions(Request $request) {
        return FlatService::getFlatRevisions($request);
    }

    public function getFlatObject(Request $request)
    {
        return FlatService::getFlatObject($request);
    }

    public function searchFlat(Request $request) {
        $flatRecord = null;
        $owners = null;
        $purchasers = null;
        $searchTerm = $request->get('search');
        $flat = Flat::whereBuildingId(BuildingService::getBuildingId())->where('flat_name', 'like', '%' . $searchTerm . '%')
            ->orWhere('flat_number', 'like', '%' . $searchTerm . '%')->first();
        $salesRecord = Sale::whereBuildingId(BuildingService::getBuildingId())->with('flat')->where('flat_id', $flat->id)->first();

        if (!$salesRecord) {
            $flatRecord = Flat::whereBuildingId(BuildingService::getBuildingId())
                ->where('flat_name', 'like', $searchTerm . '%')
                ->orWhere('flat_number', 'like', $searchTerm . '%')
                ->first();
            $salesRecord = null;
        } else {
            $owners = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
                ->where('sale_id', $salesRecord->id)->where('status', false)->get();
            $purchasers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
                ->where('sale_id', $salesRecord->id)->where('status', true)->get();
        }

//        dd($salesRecord);
        $params = [
            'pageTitle' => __('general.flat_shop_search_details'),
            'salesRecord' => $salesRecord,
            'flatRecord' => $flatRecord,
            'owners' => $owners,
            'purchasers' => $purchasers,
        ];
        return view('dashboard.real-estate.flat.search', $params);
    }
}
