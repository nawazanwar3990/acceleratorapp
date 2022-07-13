<?php

namespace App\Http\Controllers\SaleManagement;

use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\SaleManagement\Sale;
use App\Models\WorkingSpace\Office;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    use General;

    public function __construct()
    {

        $this->makeDirectory('sales');
        $this->makeMultipleDirectories('sales', ['documents', 'images']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): Factory|View|Application
    {
        $this->authorize('view', Sale::class);
        $records = Sale::with('flat.floor', 'building', 'purchasers.Hr')
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

        $transferNoList = Sale::pluck('transfer_no', 'id');
        $flatsList = Office::where('sales_status', '!=', 'open')->get();

        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
            'transferNoList' => $transferNoList,
            'flatsList' => $flatsList,
        ];

        return view('dashboard.sales-management.sales.index', $params);
    }

    public function create()
    {
//        $this->authorize('create', Sale::class);
        $params = [
            'pageTitle' => __('general.title_transfer'),
        ];

        return view('dashboard.real-estate.sales.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(SalesRequest $request)
    {
       $this->authorize('create', Sale::class);
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

    public function forceStopDealDetails(Request $request)
    {
        return SalesService::processForceStopDealRequest($request);
    }
}
