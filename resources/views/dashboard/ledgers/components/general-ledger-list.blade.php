<tbody>
    @php
        $curBalance = $openingBalance;
        $totalDebit = $totalCredit = 0;
    @endphp
    @forelse($transactions as $transaction)
        @php
            $totalDebit += $transaction->Debit;
            $curBalance += $transaction->Debit;

            $totalCredit += $transaction->Credit;
            $curBalance -= $transaction->Credit;
        @endphp
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ \App\Services\GeneralService::formatDate( $transaction->vDate ) }}</td>
            <td>{{ $transaction->COAID }}</td>
            <td>{!! $transaction->Narration !!}</td>
            <td>{{ \App\Services\GeneralService::number_format( $transaction->Debit ) }}</td>
            <td>{{ \App\Services\GeneralService::number_format( $transaction->Credit ) }}</td>
            <td>{{ \App\Services\GeneralService::ledgerBalanceType( $curBalance ) }}</td>
        </tr>
    @empty
        <tr>
            <td class="text-center" colspan="7">
                {{ __('general.no_record_found') }}
            </td>
        </tr>
    @endforelse
</tbody>
<tfoot>
    <tr>
        <td colspan="4" class="text-right"><b>{{ __('general.total') }}</b></td>
        <td class="text-center"><b>{{ \App\Services\GeneralService::number_format( $totalDebit ) }}</b></td>
        <td class="text-center"><b>{{ \App\Services\GeneralService::number_format( $totalCredit ) }}</b></td>
        <td class="text-center"><b>{{ \App\Services\GeneralService::ledgerBalanceType( $curBalance ) }}</b></td>
    </tr>
</tfoot>
