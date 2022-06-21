@php $debit = $credit = $balance = 0; @endphp
@forelse($records as $record)
    @php
        $debit += $record->Debit;
        $credit += $record->Credit;
        $balance = $debit - $credit;
    @endphp
    <tr>
        <td>{{ \App\Services\GeneralService::formatDate( $record->vDate ) }}</td>
        <td>{!! $record->Narration !!}</td>
        <td>{{ $record->vNo }}</td>
        <td class="text-right">{{ \App\Services\GeneralService::number_format( $record->Debit ) }}</td>
        <td class="text-right">{{ \App\Services\GeneralService::number_format( $record->Credit ) }}</td>
        <td class="text-right">{{ \App\Services\GeneralService::number_format( $balance ) }}</td>
    </tr>

@empty
@endforelse
<tfoot>
    <tr>
        <td colspan="3" class="text-right"><b>{{ __('general.grand_total') }}</b></td>
        <td class="text-right">
            <b>{{ \App\Services\GeneralService::number_format($debit) }}</b>
        </td>
        <td class="text-right">
            <b>{{ \App\Services\GeneralService::number_format($credit) }}</b>
        </td>
        <td class="text-right">
            <b>{{ \App\Services\GeneralService::ledgerBalanceType($balance)}}</b>
        </td>
    </tr>
</tfoot>
