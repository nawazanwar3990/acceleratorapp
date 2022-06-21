@php
    $GLOBALS['TotalAssertF']   = 0;
    $GLOBALS['TotalLiabilityF']= 0;
    $GLOBALS['Revenue']   = 0;
    $GLOBALS['CGS']   = 0;
    $GLOBALS['oIncome']   = 0;
    $GLOBALS['Expenses']   = 0;
@endphp
<tr>
    <td>
        <h5 class="fw-bold text-purple">{{ __('general.total_profit_loss') }}</h5>
    </td>
    <td class="text-right">

        @php
            $totalSaleIncome = \App\Services\Accounts\ProfitLossService::salesIncome($startDate, $endDate);
            $GLOBALS['Revenue'] = $totalSaleIncome->totalSales;
        @endphp

        @php
            $totalGoods= \App\Services\Accounts\ProfitLossService::costOfGoodsSold($startDate, $endDate);
            $GLOBALS['CGS'] = $totalGoods['openingInventory'] + $totalGoods['flatPurchase'] - $totalGoods['closingInventory'];
        @endphp

        @for($i=0;$i<count($oResultLiability);$i++)
            @php $Visited[$i] = false @endphp
        @endfor
        @php $GLOBALS['TotalLiability'] = 0;
             \App\Services\Accounts\ProfitLossService::AssertCoaWithoutHtml("COA","0",0,$oResultLiability,$Visited,0,$startDate, $endDate,1,"Expenses");
             $GLOBALS['Expenses']=$GLOBALS['TotalLiabilityF'];
        @endphp

        @for($i=0;$i<count($oResultAssetOtherIncome);$i++)
            @php $Visited[$i] = false @endphp
        @endfor

        @php
            \App\Services\Accounts\ProfitLossService::AssertCoaWithoutHtml("COA","0",0,$oResultAssetOtherIncome,$Visited,0,$startDate, $endDate,0,'Other Income');
            $GLOBALS['oIncome']=$GLOBALS['TotalAssertF'];
        debug($GLOBALS['oIncome']);
        @endphp



        <h5 class="fw-bold text-purple">{{ \App\Services\GeneralService::ledgerBalanceType(
                                    ($GLOBALS['Revenue'] - $GLOBALS['CGS']) - $GLOBALS['Expenses'] + $GLOBALS['oIncome']
                                     ,true) }}</h5>
        @php  $GLOBALS['totalLiabEqPL']   +=  ($GLOBALS['Revenue'] - $GLOBALS['CGS']) - $GLOBALS['Expenses'] + $GLOBALS['oIncome']; @endphp


    </td>
</tr>
