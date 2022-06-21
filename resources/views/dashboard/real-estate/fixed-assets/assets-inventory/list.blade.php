@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->asset_code }}</td>
        <td>{{ $record->asset_name }}</td>
        <td>{{ $record->quantity }}</td>
        <td>{{ $record->assetsUnit->name ?? null }}</td>
        <td>{{ $record->series_model }}</td>
        <td>{{ $record->asset_group }}</td>
        <td>{{ $record->hr->first_name ?? null }}</td>
        <td>{{ $record->assetsLocation->name ?? null }}</td>
        <td>{{ $record->date_of_purchase }}</td>
{{--        <td>--}}
{{--            <a href="{{ url(\App\Services\GeneralService::getDocumentMedia('fixed_assets_document',$record->id)) }}" class="btn btn-success" download>--}}
{{--                <i class="fa fa-download"></i>--}}
{{--            </a>--}}
{{--        </td>--}}

        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.assets-inventory.edit', $record->id),
                //'delete' => route('dashboard.assets-location.destroy', $record->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
