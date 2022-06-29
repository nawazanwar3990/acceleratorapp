{{--@forelse($records as $record)--}}
{{--    <tr>--}}
{{--        <td class="text-center">{{ $loop->iteration }}</td>--}}
{{--        <td>{{ \App\Enum\ServiceEnum::getServiceType($record->type) }}</td>--}}
{{--        <td>{{ $record->name ?? '' }}</td>--}}
{{--        <td>--}}
{{--            <span class="badge bg-{{ $record->status === 1 ? "success" : "danger" }}">--}}
{{--                {{ $record->status === 1 ? "Active" : "Deactivate" }}--}}
{{--            </span>--}}
{{--        </td>--}}
{{--        <td class="text-center">--}}
{{--            @include('dashboard.components.general.table-actions', [--}}
{{--                'edit' => route('dashboard.services.edit', $record->id),--}}
{{--                'delete' => route('dashboard.services.destroy', $record->id),--}}
{{--            ])--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--@empty--}}
    <tr>
        <td colspan="4">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
{{--@endforelse--}}
