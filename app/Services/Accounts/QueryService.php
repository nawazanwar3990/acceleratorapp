<?php

namespace App\Services\Accounts;

use App\Services\BuildingService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class QueryService
{
    public static function filterByDate($request, $query, $table, $type = null)
    {
        $commonDateFilter = $request->has('start_date') &&
            $request->get('start_date') != '' &&
            $request->has('end_date') &&
            $request->get('end_date') != '';

        if ($commonDateFilter) {
            $startDate = Carbon::parse($request->start_date)->format('Y-m-d');
            $endDate =  Carbon::parse($request->end_date)->format('Y-m-d');

            if ($type == 'transaction-between') {
                $query = $query
                    ->where($table . '.vDate', '>=', $startDate)
                    ->where($table . '.vDate', '<=', $endDate);

            }elseif ($type == 'transaction'){
                $query = $query->where($table.'.vDate', '<', $startDate);

            } else {
                $query = $query->where($table.'.date', '>=', $startDate)
                    ->where($table.'.date', '<=', $endDate);
            }
        }
        return $query;
    }

    public static function getPreviousBalance($dtpFromDate){
        $balance = 0 ;
        $dtpFromDate = Carbon::parse($dtpFromDate)->format('Y-m-d');

        $report = DB::table('transactions')
            ->where('COAID', 'like', '1020101' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(Debit) Debit, SUM(Credit) Credit, is_approve, COAID')
            ->groupBy('is_approve', 'COAID');
        $report = $report->where('vDate', '<', $dtpFromDate);
        $report = $report->first();

        if(!empty($report) ) {
            $balance = $report->Debit - $report->Credit;
        }
        return $balance;
    }

    public static function assetsInfo($head_name){
        return DB::table('account_heads')
            ->select("*")
            ->where('PHeadName', $head_name)
            ->get()->groupBy('HeadCode');
    }

    public static function assetsBalance($head_code,$from_date,$to_date){
        return DB::table('transactions')
            ->selectRaw('(sum(Debit)-sum(Credit)) as balance')
            ->where('COAID',$head_code)
//            ->where('VDate', '>=', $from_date)
            ->where('vDate', '<=', $to_date)
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->first();

    }

    public static function assetChilds($head_name,$from_date,$to_date){
        return DB::table('account_heads')
            ->where('PHeadName',$head_name)
            ->get()->groupBy('HeadCode');
    }

    public static function assetNonCurrentChilds($head_name,$from_date,$to_date){
        return DB::table('account_heads')
            ->where('HeadName',$head_name)
            ->get()->groupBy('HeadCode');
    }

    public static function liabilitiesInfo($head_name){
        return DB::table('account_heads')
            ->where('PHeadName',$head_name)
            ->get();
    }

    public static function liabilitiesInfoTax($head_name){
        return DB::table('account_heads')
            ->where('HeadName',$head_name)
            ->get();
    }

    public static function liabilitiesBalance($head_code,$from_date,$to_date){

        return DB::table('transactions')
            ->selectRaw('(sum(Credit)-sum(Debit)) as balance,COAID')
            ->where('COAID',$head_code)
            ->where('vDate', '>=', $from_date)
            ->where('vDate', '<=', $to_date)
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->groupBy('COAID')
            ->first();
    }
}
