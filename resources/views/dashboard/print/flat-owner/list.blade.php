@forelse($records as $record)
    <tr>
{{--        <td class="text-center">{{ $loop->iteration }}</td>--}}
        <td style="font-size: 11px">{{ $record->Hr->id }}</td>
        <td style="font-size: 11px">{{ $record->flat->flat_name }}</td>
        <td style="font-size: 11px">{{ $record->Hr->first_name." ".$record->Hr->last_name }}</td>
        <td style="font-size: 11px">{{ $record->Hr->cnic}}</td>
        <td style="font-size: 11px">{{ \Carbon\Carbon::parse($record->flat->creation_date)->format('d-M-Y') }}</td>
        <td style="font-size: 11px">{{ $record->status === 1 ? "Active Owner" : "X-Owner" }}</td>
{{--        <td class="text-center">--}}
{{--            @include('components.General.print-btn', [--}}
{{--                'print' => route('dashboard.flats-shops.show', $record->id),--}}
{{--            ])--}}
{{--        </td>--}}
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
