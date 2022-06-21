@for($i=0; $i < count($oResultLiability); $i++)
    @php $Visited[$i] = false @endphp
@endfor
@php
    $GLOBALS['TotalLiability'] = 0;
    \App\Services\Accounts\ProfitLossService::AssertCoa("COA","0",0,$oResultLiability,$Visited,0,$startDate,$endDate,1,"Expenses");
    $GLOBALS['Expenses']=$GLOBALS['TotalLiabilityF'];
@endphp
<tr>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">Total Expenses</td>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ \App\Services\GeneralService::ledgerBalanceType( $GLOBALS['Expenses'],true ) }}</td>
</tr>
