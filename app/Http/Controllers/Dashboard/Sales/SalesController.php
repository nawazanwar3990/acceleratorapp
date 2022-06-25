<?php

namespace App\Http\Controllers\Dashboard\Sales;

use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlanManagement\SalesRequest;
use App\Models\Broker;
use App\Models\FlatManagement\Flat;
use App\Models\FlatManagement\FlatOwner;
use App\Models\Sales\Sale;
use App\Services\Accounts\QueryService;
use App\Services\SalesService;
use App\Traits\General;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

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
        $records = Sale::with('flat.floor', 'Building', 'purchasers.Hr')
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
        $flatsList = Flat::where('sales_status', '!=', 'open')->get();

        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
            'transferNoList' => $transferNoList,
            'flatsList' => $flatsList,
        ];

        return view('dashboard.sales.index', $params);
    }

    public function create()
    {
//        $this->authorize('create', Sale::class);
        $params = [
            'pageTitle' => __('general.title_transfer'),
        ];

        return view('dashboard.sales.create', $params);
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
        $records = Sale::where('transfer_no', $id)
            ->with('createdBy','installmentPlan')
            ->firstOrFail();
        $owners = FlatOwner::with('Hr')
            ->where('sale_id', $records->id)->where('status', false)->get();
        $purchasers = FlatOwner::with('Hr')
            ->where('sale_id', $records->id)->where('status', true)->get();
        $brokers = Broker::with('Hr')
            ->where('record_id', $records->id)->where('record_type', 'sales')->get();
        $params = [
            'pageTitle' => __('general.title_transfer_print'),
            'records' => $records,
            'owners' => $owners,
            'purchasers' => $purchasers,
            'brokers' => $brokers,
        ];

//        dd($params);
        return view('dashboard.print.title-transfer.print-view', $params);
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
        $sales = Sale::where('transfer_no', $request->get('transfer-no'))->firstOrFail();
        $owner = FlatOwner::where('sale_id', $sales->id)->where('flat_id', $sales->flat->id)
            ->where('status', false)->first();
        $buyer = FlatOwner::where('sale_id', $sales->id)->where('flat_id', $sales->flat->id)
            ->where('status', true)->first();

//        dd($sales);
        $params = [
            'pageTitle' => __('general.seller_affidavit'),
            'record' => $sales,
            'owner' => $owner,
            'buyer' => $buyer,
        ];

        return view('dashboard.sales.print.seller-affidavit', $params);
    }

    public function commodityDealClosings(Request $request) {
        $this->authorize('view', Sale::class);

        $records = Sale::whereIn('payment_sub_method', [2, 3])->whereNull('commodity_adjustment_value')
            ->orderBy('date', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
        ];

        return view('dashboard.sales.commodity-deal-closings', $params);
    }

    public function getCommodityTypeView(Request $request) {
        return SalesService::getCommodityTypeViewForJS($request);
    }
}
