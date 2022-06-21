@php
    $totalGoods = \App\Services\Accounts\ProfitLossService::costOfGoodsSold($startDate, $endDate);
    $GLOBALS['CGS'] = $totalGoods['openingInventory'] + $totalGoods['flatPurchase'] - $totalGoods['closingInventory'];
@endphp
<tr>
    <td colspan="2" class="fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ __('general.cost_of_flats') }}</td>
</tr>
<tr>
    <td>{{ __('general.flat_purchase') }}</td>
    <td class="text-right">{{ \App\Services\GeneralService::ledgerBalanceType( $totalGoods['flatPurchase'],true ) }}</td>
</tr>
<tr>
    <td class="text-right" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ __('general.total_cost') }}</td>
    <td class="text-right" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ \App\Services\GeneralService::ledgerBalanceType( $GLOBALS['CGS'],true ) }}</td>
</tr>
<tr>
    <td colspan="2"></td>
</tr>
