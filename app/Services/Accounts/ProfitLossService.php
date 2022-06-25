<?php

namespace App\Services\Accounts;

use App\Services\BuildingService;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProfitLossService
{
    public static function salesIncome($dtpFromDate, $dtpToDate) {

        $records = DB::table('transactions')
            ->where('COAID', 'like', '303' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(transactions.Debit) AS totalSales')
            ->where('vDate', '>=', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->where('vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'));

        return $records->first();
    }

    public static function AssertCoa($HeadName,$HeadCode,$GL,$oResultAsset,$Visited,$value,$dtpFromDate,$dtpToDate,$check,$heading){
        if($value == 1) {
            echo "<tr>
                <td colspan='2' class='fw-bold' style='color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;'>" . $heading . "</td>
            </tr>";
        }
        elseif($value > 1) {
            if($check) {
                $sqlF = self::profitLossFirstQuery($dtpFromDate, $dtpToDate, $HeadCode);
            } else {
                $sqlF = self::profitLossSecondQuery($dtpFromDate, $dtpToDate, $HeadCode, $heading);
            }

            $oResultAmountPreF = $sqlF;

            if($value == 2 || $value == 3) {
                if($check == 1) {
                    $GLOBALS['TotalLiabilityF']=$GLOBALS['TotalLiabilityF'] + $sqlF->Amount;
                } else {
                    $GLOBALS['TotalAssertF']=$GLOBALS['TotalAssertF'] + $sqlF->Amount;
                }
            }

            if($sqlF->Amount != 0) {
                echo "<tr>
                        <td>". $HeadName ."</td>
                        <td class='text-right'>". GeneralService::number_format( $sqlF->Amount ) ."</td>
                    </tr>";

            }
        }
        for($i=0; $i < count($oResultAsset); $i++) {
            if (!$Visited[$i] && $GL == 0) {
                if ($HeadName == $oResultAsset[$i]->PHeadName) {
                    $Visited[$i] = true;
                    self::AssertCoa($oResultAsset[$i]->HeadName,$oResultAsset[$i]->HeadCode,$oResultAsset[$i]->IsGL,$oResultAsset,$Visited,$value+1,$dtpFromDate,$dtpToDate,$check,$heading);
                }
            }
        }
    }

    private static function profitLossFirstQuery($dtpFromDate, $dtpToDate, $COAID){
        return DB::table('transactions')
            ->selectRaw('IFNULL(SUM(transactions.Debit) - SUM(transactions.Credit), 0) AS Amount')
            ->join('account_heads as h','h.HeadCode','=','transactions.COAID')
            ->where('transactions.COAID', '=', $COAID )
            ->where('transactions.vDate', '>=', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->where('transactions.vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'))
            ->where('transactions.building_id', BuildingService::getBuildingId())
            ->first();
    }

    private static function profitLossSecondQuery($dtpFromDate, $dtpToDate, $COAID ,$type=null){

        $data = DB::table('transactions');
        if($type=="Other Income") {
            $data = $data->selectRaw('IFNULL(SUM(transactions.Credit) - SUM(transactions.Debit), 0) AS Amount');
        } else {
            $data = $data->selectRaw('IFNULL(SUM(transactions.Debit) - SUM(transactions.Credit), 0) AS Amount');
        }
        return $data->join('account_heads as h','h.HeadCode','=','transactions.COAID')
            ->where('transactions.COAID', '=', $COAID)
            ->where('transactions.vDate', '>=', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->where('transactions.vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'))
            ->where('transactions.is_approve', '=', 1)
            ->where('transactions.building_id', BuildingService::getBuildingId())
            ->first();
    }

    public static function costOfGoodsSold($dtpFromDate, $dtpToDate){
        $oInv = DB::table('transactions')
            ->where('COAID', 'like', '10107' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(transactions.Debit) - SUM(transactions.Credit) AS openingInventory')
            ->where('vDate', '<', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->first();


        $productPurchase = DB::table('transactions')
            ->where('COAID', 'like', '402' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(transactions.Debit) AS totalPurchase')
            ->where('vDate', '>=', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->where('vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'))
            ->first();


        $cInv = DB::table('transactions')
            ->where('COAID', 'like', '10107' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(transactions.Debit) - SUM(transactions.Credit) AS closingInventory')
            ->where('vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'))
            ->first();

        $totalCOGS = ($oInv->openingInventory + $productPurchase->totalPurchase) - $cInv->closingInventory ;

        ///////////// for Gross Profit ////////////////////

        $productSale = DB::table('transactions')
            ->where('COAID', 'like', '303' . '%')
            ->where('is_approve',1)
            ->where('building_id', BuildingService::getBuildingId())
            ->selectRaw('SUM(transactions.Debit) AS totalSales')
            ->where('vDate', '>=', Carbon::parse($dtpFromDate)->format('Y-m-d'))
            ->where('vDate', '<=', Carbon::parse($dtpToDate)->format('Y-m-d'))
            ->first();

        $grossProfit = $productSale->totalSales - $totalCOGS;


        return [
            'openingInventory' => $oInv->openingInventory,
            'closingInventory' => $cInv->closingInventory,
            'flatPurchase' => $productPurchase->totalPurchase,
            'totalCOGS' => $totalCOGS,
            'grossProfit'   => $grossProfit
        ];

    }

    public static function AssertCoaWithoutHtml($HeadName,$HeadCode,$GL,$oResultAsset,$Visited,$value,$dtpFromDate,$dtpToDate,$check, $heading) {
        if($value > 1) {

            if($check) {
                $sqlF = self::profitLossFirstQuery($dtpFromDate, $dtpToDate, $HeadCode);
            } else {
                $sqlF = self::profitLossSecondQuery($dtpFromDate, $dtpToDate, $HeadCode, $heading);
            }

            if($value == 2 || $value == 3) {
                if($check==1) {
                    $GLOBALS['TotalLiabilityF'] = $GLOBALS['TotalLiabilityF'] + $sqlF->Amount;
                } else {
                    $GLOBALS['TotalAssertF'] = $GLOBALS['TotalAssertF'] + $sqlF->Amount;
                }
            }

            if($sqlF->Amount != 0) {
                $GLOBALS['Heads'][] = ['account_name' => $HeadName , 'amount' => $sqlF->Amount];
            }

        }

        for($i = 0; $i < count($oResultAsset); $i++) {
            if (!$Visited[$i] && $GL==0) {
                if ($HeadName==$oResultAsset[$i]->PHeadName) {
                    $Visited[$i]=true;
                    self::AssertCoaWithoutHtml($oResultAsset[$i]->HeadName,$oResultAsset[$i]->HeadCode,$oResultAsset[$i]->IsGL,$oResultAsset,$Visited,$value+1,$dtpFromDate,$dtpToDate,$check, $heading);
                }
            }
        }
    }
}
