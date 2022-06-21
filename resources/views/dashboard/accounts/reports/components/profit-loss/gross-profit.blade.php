<tr>
    <td class="text-right" style="color: #FFFFFF !important; background-color: #472051 !important;"><h3 class="mt-0 mb-0 fw-bold">{{ __('general.gross_profit') }}</h3></td>
    <td class="text-right" style="color: #FFFFFF !important; background-color: #472051 !important;"><h3 class="mt-0 mb-0 fw-bold">{{ \App\Services\GeneralService::ledgerBalanceType( $GLOBALS['Revenue'] - $GLOBALS['CGS'],true ) }}</h3></td>
</tr>
<tr>
    <td colspan="2"></td>
</tr>
