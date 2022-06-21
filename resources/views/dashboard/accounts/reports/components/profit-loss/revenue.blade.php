@php
    $totalSaleIncome = \App\Services\Accounts\ProfitLossService::salesIncome($startDate, $endDate);
    $GLOBALS['Revenue'] = $totalSaleIncome->totalSales;
@endphp
<tr>
    <td class="fw-bold" colspan='2' style='color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;'>
        {{ __('general.revenue') }}</td>
</tr>
<tr>
    <td>{{ __('general.sales') }}</td>
    <td class="text-right">{{ \App\Services\GeneralService::ledgerBalanceType( $totalSaleIncome->totalSales, true ) }}</td>
</tr>
<tr>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">
        {{ __('general.total_sales') }}</td>
    <td class="text-right fw-bold" style="color: #472051 !important; background-color: rgba(71, 32, 81, 0.15) !important;">{{ \App\Services\GeneralService::ledgerBalanceType( $totalSaleIncome->totalSales, true ) }}</td>
</tr>
<tr>
    <td colspan="2"></td>
</tr>
