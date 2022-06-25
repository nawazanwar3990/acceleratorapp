<?php

namespace App\Services\Accounts;

use App\Models\Accounts\AccountHead;
use App\Services\BuildingService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BalanceSheetService
{

    public static function balanceSheetReport($request) {
        $fixedAssets = AccountHead::where('PHeadName', 'Assets')

            ->get();
        $liabilities = AccountHead::where('PHeadName', 'Liabilities')

            ->get();
        $expenses = AccountHead::where('PHeadName', 'Expense')

            ->get();
        $equityCapital = AccountHead::where('PHeadName', 'Capital')

            ->get();
        $equityDrawings = AccountHead::where('PHeadName', 'Drawings')

            ->get();
        /* just for p&l */
        $oResultAsset = AccountHead::where('HeadType', 'I')

            ->get();
        $oResultLiability = AccountHead::where('HeadType', 'E')->where('HeadCode', '<>', 402)

            ->get();

        $oResultAssetOtherIncome = AccountHead::where('HeadType', 'I')

            ->whereNotIn('HeadCode', [303])
            ->get();

        $startDate = Carbon::now()->format('Y-m-d');
        $endDate = Carbon::now()->format('Y-m-d');

        if ($request->has('start_date') && $request->get('start_date') != '') {
            $startDate = Carbon::parse($request->start_date)->format('Y-m-d');
        }
        if ($request->has('end_date') && $request->get('end_date') != '') {
            $endDate = Carbon::parse($request->end_date)->format('Y-m-d');
        }

        return [
            'fixedAssets' => $fixedAssets,
            'liabilities' => $liabilities,
            'expenses' => $expenses,
            'equityCapital' => $equityCapital,
            'equityDrawings' => $equityDrawings,
            'oResultAsset' => $oResultAsset,
            'oResultLiability' => $oResultLiability,
            'oResultAssetOtherIncome' => $oResultAssetOtherIncome,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ];
    }

    public static function capital($dtpFromDate,$dtpToDate,$head_name){
        return DB::table('transactions as t')
            ->join('account_heads as h','h.HeadCode','=','t.COAID')
            ->where('h.HeadName',$head_name)
            ->selectRaw('SUM(t.Credit) - SUM(t.Debit) AS amount,h.HeadName,h.HeadCode')
            ->where('t.vDate', '>=', $dtpFromDate)
            ->where('t.vDate', '<=', $dtpToDate)
            ->where('t.is_approve', 1)
            ->where('t.building_id', BuildingService::getBuildingId())
            ->groupBy('h.HeadName','h.HeadCode')
            ->get();
    }
}
