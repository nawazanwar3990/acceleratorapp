@forelse($records as $record)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            {{ $record->first_name }} {{ $record->middle_name }} {{ $record->last_name }}
{{--            <a href="{{ route('dashboard.seller-ledger', ['seller_id' => $record->id]) }}" target="_blank" data-bs-toggle="tooltip" data-placement="top" title="{{ __('general.view_ledger') }}">--}}
{{--                {{ $record->first_name }} {{ $record->middle_name }} {{ $record->last_name }}--}}
{{--            </a>--}}
        </td>
        <td>{{ $record->cnic }}</td>
        <td>{{ $record->cell_1 }}</td>
        <td>
            <a href="{{ route('dashboard.human-resource.show', $record->id) }}" target="_blank">{{ $record->hr_no }}</a>
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="5">{{ __('general.no_record_found') }}</td>
    </tr>
@endforelse
