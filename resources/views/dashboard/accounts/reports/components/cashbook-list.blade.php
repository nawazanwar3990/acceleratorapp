@php
    $totalCredit=0;
    $totalDebit=0;
    $balance=0;
@endphp
@forelse($records as $record)
    @php
        $totalDebit += $record->Debit;
        $totalCredit += $record->Credit;
        $balance += $record->Debit - $record->Credit;
    @endphp
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            <span class="pull-left"><strong>{{ __('general.date') }}: </strong>{{ \App\Services\GeneralService::formatDate( $record->vDate ) }}</span>
            <span class="pull-right"><strong>{{ __('general.opening_balance') }}: </strong>{{ \App\Services\GeneralService::ledgerBalanceType( \App\Services\Accounts\QueryService::getPreviousBalance( $record->vDate ) ) }}</span>
        </td>
        <td>{{ $record->vNo }}</td>
        <td>{{ $record->vType }}</td>
        <td>{!! $record->Narration !!}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->Debit ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->Credit ) }}</td>
{{--        <td>{{ $record->Debit }}</td>--}}
{{--        <td>{{ $record->Credit }}</td>--}}
        <td>{{ \App\Services\GeneralService::ledgerBalanceType( $balance ) }}</td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="8">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
