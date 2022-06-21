<tr>
    <td colspan="2" align="right"></td>
</tr>

@for($i=0;$i<count($oResultAssetOtherIncome);$i++)
    @php $Visited[$i] = false @endphp
@endfor
@php
    \App\Services\Accounts\ProfitLossService::AssertCoa("COA","0",0,$oResultAssetOtherIncome,$Visited,0,$startDate,$endDate,0,"Other Income");
    /*\App\Services\ProfitLossService::profitLossOtherIncome($oResultAssetOtherIncome,$date['start_date'],$date['end_date']);*/

    $GLOBALS['oIncome']=$GLOBALS['TotalAssertF']
@endphp

<tr>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">Total Income</td>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ \App\Services\GeneralService::ledgerBalanceType($GLOBALS['oIncome'],true)}}</td>
</tr>
<tr>
    <td></td>
</tr>
