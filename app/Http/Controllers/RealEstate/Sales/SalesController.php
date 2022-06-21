<?php

namespace App\Http\Controllers\RealEstate\Sales;

use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Sales\SalesRequest;
use App\Models\RealEstate\Broker;
use App\Models\RealEstate\Flat;
use App\Models\RealEstate\FlatOwner;
use App\Models\RealEstate\Sales\Sale;
use App\Services\Accounts\QueryService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\SalesService;
use App\Traits\General;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    use General;

    public function __construct()
    {

        $this->makeDirectory('sales');
        $this->makeMultipleDirectories('sales', ['documents', 'images']);
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $this->authorize('view', Sale::class);
        $records = Sale::whereBuildingId(BuildingService::getBuildingId())->with('flat.floor', 'Building', 'purchasers.Hr')
        ->when($request->filled('transfer_no'), function ($query) use ($request) {
            $query->where('transfer_no', $request->get('transfer_no'));
        })
        ->when($request->filled('flat_id'), function ($query) use ($request) {
            $query->where('flat_id', $request->get('flat_id'));
        })
        ->when(($request->filled('start_date') && $request->filled('end_date')), function ($query) use ($request) {
            QueryService::filterByDate($request, $query, TableEnum::SALES);
        })
        ->orderBy('date', 'DESC')->get();
        $transferNoList = Sale::whereBuildingId(BuildingService::getBuildingId())->pluck('transfer_no', 'id');
        $flatsList = Flat::whereBuildingId(BuildingService::getBuildingId())->where('sales_status', '!=', 'open')->get();

        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
            'transferNoList' => $transferNoList,
            'flatsList' => $flatsList,
        ];

        return view('dashboard.real-estate.sales.index', $params);
    }

    public function create()
    {
//        $this->authorize('create', Sale::class);
        $params = [
            'pageTitle' => __('general.title_transfer'),
        ];

        return view('dashboard.real-estate.sales.create', $params);
    }

    public function store(SalesRequest $request)
    {
//        $this->authorize('create', Sale::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.sales.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.sales.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', Sale::class);
        $records = Sale::whereBuildingId(BuildingService::getBuildingId())
            ->where('transfer_no', $id)
            ->with('createdBy','installmentPlan')
            ->firstOrFail();
        $owners = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->where('sale_id', $records->id)->where('status', false)->get();
        $purchasers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->where('sale_id', $records->id)->where('status', true)->get();
        $brokers = Broker::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->where('record_id', $records->id)->where('record_type', 'sales')->get();
        $params = [
            'pageTitle' => __('general.title_transfer_print'),
            'records' => $records,
            'owners' => $owners,
            'purchasers' => $purchasers,
            'brokers' => $brokers,
        ];

//        dd($params);
        return view('dashboard.real-estate.print.title-transfer.print-view', $params);
    }

    public function edit($id)
    {
        $this->authorize('update', Sale::class);
        //
    }

    public function update(SalesRequest $request, $id)
    {
        $this->authorize('update', Sale::class);
        //
    }

    public function destroy(SalesRequest $request, $id)
    {
        $this->authorize('delete', Sale::class);
        //
    }

    public function getPaymentTypeView(Request $request) {
        return SalesService::getPaymentTypeViewForJS($request);
    }

    public function titleTransferPrint(Request $request) {

    }

    public function sellerAffidavitPrint(Request $request) {
        $sales = Sale::whereBuildingId(BuildingService::getBuildingId())->where('transfer_no', $request->get('transfer-no'))->firstOrFail();
        $owner = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->where('sale_id', $sales->id)->where('flat_id', $sales->flat->id)
            ->where('status', false)->first();
        $buyer = FlatOwner::whereBuildingId(BuildingService::getBuildingId())->where('sale_id', $sales->id)->where('flat_id', $sales->flat->id)
            ->where('status', true)->first();

//        dd($sales);
        $params = [
            'pageTitle' => __('general.seller_affidavit'),
            'record' => $sales,
            'owner' => $owner,
            'buyer' => $buyer,
        ];

        return view('dashboard.real-estate.sales.print.seller-affidavit', $params);
    }

    public function commodityDealClosings(Request $request) {
        $this->authorize('view', Sale::class);

        $records = Sale::whereBuildingId(BuildingService::getBuildingId())
            ->whereIn('payment_sub_method', [2, 3])->whereNull('commodity_adjustment_value')
            ->orderBy('date', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.sales.commodity-deal-closings', $params);
    }

    public function getCommodityTypeView(Request $request) {
        return SalesService::getCommodityTypeViewForJS($request);
    }
}
