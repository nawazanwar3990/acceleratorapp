<?php

namespace App\Services;

use App\Enum\TableEnum;
use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Broker;
use App\Services\Accounts\QueryService;
use App\Services\RealEstate\BuildingService;
use Illuminate\Support\Facades\DB;

class ReportService
{
    public static function cashBook($request) {
        $openingBalance=0;

        $records = Transaction::whereHas('accountHead')
            ->selectRaw('transactions.vNo, transactions.vType, transactions.vDate, transactions.Debit, transactions.Credit, transactions.is_approve, transactions.COAID, transactions.Narration')
            ->groupByRaw('transactions.vNo, transactions.vType, transactions.vDate, transactions.Debit, transactions.Credit, transactions.is_approve, transactions.COAID, transactions.Narration')
            ->havingRaw('SUM(transactions.Debit)-SUM(transactions.Credit)<>0')
            ->where('COAID', 'like', '1020101' . '%')
            ->where('building_id', BuildingService::getBuildingId());
        $records = QueryService::filterByDate($request, $records,'transactions','transaction-between');
        $records = $records->where('is_approve',1)
            ->orderBy('VDate','ASC')
            ->get();

        $openingBalance = QueryService::getPreviousBalance($request->get('start_date'));

        return [
            'records' => $records,
            'openingBalance' => $openingBalance,
        ];
    }

    public static function profitLossReport($request) {
        $oResultAssetOtherIncome = AccountHead::where('HeadType','I')

            ->whereNotIn('HeadCode',[303])
            ->get();

        $oResultLiability = AccountHead::where('HeadType','E')->where('HeadCode','<>',402)

            ->get();
        $oResultClosingInventory = AccountHead::where('HeadName','Inventory')

            ->get();

        return ['oResultAssetOtherIncome' => $oResultAssetOtherIncome, 'oResultLiability' => $oResultLiability, 'oResultClosingInventory' => $oResultClosingInventory];

    }

    public static function salesWiseProfitLossReport($request) {
        $data = DB::table(TableEnum::SALES)
            ->where(TableEnum::SALES . '.building_id', BuildingService::getBuildingId())
            ->join(TableEnum::FLATS . ' as f', 'f.id', TableEnum::SALES . '.flat_id')
            ->select(TableEnum::SALES . '.transfer_no', TableEnum::SALES . '.date', TableEnum::SALES . '.after_discount_amount', 'f.flat_name', 'f.flat_number', 'f.purchase_price');
            $data = QueryService::filterByDate($request, $data, 'sales');
            return $data->orderBy(TableEnum::SALES . '.date', 'ASC')->get();
    }

    public static function brokerWiseSalesReport($request) {
        $brokerAccounts = Broker::with('Hr')
            ->get()->pluck('hr.full_name', 'hr.id');

        $records = DB::table(TableEnum::SALES)
            ->join(TableEnum::BROKERS, 'brokers.record_id', 'sales.id')
            ->join(TableEnum::HRS, 'hrs.id', 'brokers.hr_id')
            ->when($request->has('broker_id'), function ($query) use ($request) {
                $query->where('brokers.hr_id', $request->get('broker_id'))
                ->where('record_type', 'sales');
            })
            ->selectRaw('SUM(after_discount_amount) totalSalesAmount, brokers.hr_id, CONCAT(hrs.first_name, " ", hrs.last_name) full_name, count(sales.id) totalSales')
            ->groupByRaw('brokers.hr_id, hrs.first_name, hrs.middle_name, hrs.last_name');
        $records = QueryService::filterByDate($request, $records, 'sales');

        $records = $records->get();

        return [
            'brokers' => $brokerAccounts,
            'records' => $records,
        ];
    }
}
