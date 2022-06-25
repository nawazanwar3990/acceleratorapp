@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration  }}</td>
        <td>{{ $record->employee->Hr->full_name }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date ) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->loan_amount ) }}</td>
        <td>{{ \App\Services\EmployeeService::loanReturnTypes( $record->return_type ) }}</td>
        <td class="text-center">
            <h4><span @class([
                    'badge',
                    'badge-warning text-dark' => $record->status == 1, //in process
                    'badge-info' => $record->status == 2, //approved
                    'badge-danger' => $record->status == 3, //rejected
                    'badge-primary' => $record->status == 4, // semi received
                    'badge-success' => $record->status == 5, // received
                    ])
            >
            @if ($record->status == 4)
                {{ __('general.in_receiving') }}
            @elseif ($record->status == 5)
                {{ __('general.returned') }}
            @else
                {{ \App\Services\EmployeeService::loanStatus( $record->status ) }}
            @endif
            </span></h4>
        </td>
        <td>

        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="7">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
