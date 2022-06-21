<?php

namespace App\Http\Controllers\RealEstate\Accounts;

use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\RealEstate\Sales\Sale;
use App\Services\Accounts\BalanceSheetService;
use App\Services\RealEstate\BrokerService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\SalesService;
use App\Services\ReportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function cashBook(Request $request) {

        $data = ReportService::cashBook($request);
        $params = [
            'pageTitle' => __('general.cash_book'),
            'records' => $data['records'],
            'openingBalance' => $data['openingBalance'],
        ];

        return view('dashboard.accounts.reports.cashbook', $params);
    }

    public function profitLoss(Request $request) {
        $data = ReportService::profitLossReport($request);

        $params = [
            'pageTitle' => __('general.profit_loss_report'),
            'oResultAssetOtherIncome' => $data['oResultAssetOtherIncome'],
            'oResultLiability' => $data['oResultLiability'],
            'oResultClosingInventory' => $data['oResultClosingInventory'],
            'startDate' => $request->start_date,
            'endDate' => $request->end_date
        ];

        return view('dashboard.accounts.reports.profit-loss', $params);
    }

    public function balanceSheet(Request $request) {
        $data = BalanceSheetService::balanceSheetReport($request);

        $params = [
            'pageTitle' => __('general.balance_sheet'),
            'fixedAssets' => $data['fixedAssets'],
            'liabilities' => $data['liabilities'],
            'expenses' => $data['expenses'],
            'equityCapital' => $data['equityCapital'],
            'equityDrawings' => $data['equityDrawings'],
            'oResultAsset' => $data['oResultAsset'],
            'oResultLiability' => $data['oResultLiability'],
            'oResultAssetOtherIncome' => $data['oResultAssetOtherIncome'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
        ];

        return view('dashboard.accounts.reports.balance-sheet', $params);
    }

    public function brokerReport(Request $request) {
        $data = BrokerService::brokerReport($request);
        $params = [
            'pageTitle' => __('general.broker_report'),
            'brokers' => $data['brokers'],
            'records' => $data['records'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
        ];

        return view('dashboard.accounts.reports.broker-report', $params);
    }

    public function pendingCollections(Request $request) {
        $data = SalesService::salesPendingCollection($request);
        $params = [
            'pageTitle' => __('general.pending_collections'),
            'records' => $data['records'],
        ];

        return view('dashboard.accounts.reports.pending-collections', $params);
    }

    public function flatWiseProfitLossReport(Request $request) {
        $data = ReportService::salesWiseProfitLossReport($request);
        $params = [
            'pageTitle' => __('general.flat_shop_wise_profit_loss_report'),
            'records' => $data,
        ];

        return view('dashboard.accounts.reports.flat-wise-profit-loss', $params);
    }

    public function brokerWiseSalesReport(Request $request) {
        $data = ReportService::brokerWiseSalesReport($request);

        $params = [
            'brokers' => $data['brokers'],
            'records' => $data['records'],
            'pageTitle' => __('general.broker_wise_sales'),
        ];

        return view('dashboard.accounts.reports.broker-wise-sales-report', $params);
    }
}
