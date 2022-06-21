@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->employee->Hr->full_name }}</td>
        <td>{{ \Carbon\Carbon::parse($record->salary_month)->format('M-Y') }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->paid_salary ) }}</td>
        <td>
            @switch($record->type)
                @case(1)
                {{ __('general.monthly_salary') }} @break
                @case(2)
                {{ __('general.advance_salary') }} @break
                @case(3)
                {{ __('general.daily_wage') }} @break
            @endswitch
        </td>
        <td class="text-center">
            @if($record->status == "Pending")
                <button type="button" class="btn btn-success btn-sm w-xs" data-bs-toggle="modal" data-bs-target="#received_by_modal" emp-id="{{ $record->employee_id }}" rec-id="{{ $record->id }}">
                    {{ __('general.pay_now') }}</button>
            @endif
            <a href="{{ route('dashboard.salary.show',$record->id) }}" class="btn btn-sm btn-info w-xs" target="_blank">{{ __('general.pay_slip') }}</a>
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="6">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
