@forelse($records as $record)
    <tr>
        <td style="font-size: 12px">{{ $record->flat_number }}</td>
        <td style="font-size: 12px">{{ $record->flat_name }}</td>
        <td style="font-size: 12px">{{ $record->flatType->name }}</td>
        <td style="font-size: 12px">{{ $record->area }}</td>
        <td style="font-size: 12px">
            @isset($record->view)
                {{ \App\Services\RealEstate\FlatService::getFlatViewsForDropdown($record->view) }}
            @endisset
        </td>
        <td style="font-size: 12px">
            @isset($record->facing)
                {{ \App\Services\RealEstate\BuildingService::buildingFacingsForDropdown($record->facing) }}
            @endisset
        </td>
        <td style="font-size: 12px">{{ \App\Services\PersonService::getHrById($record->owners[0]->hr_id)->first_name }}</td>
        <td style="font-size: 12px">{{ $record->furnished === 1 ? "Done" : "Incomplete" }}</td>
        <td style="font-size: 12px">{{ $record->sales_status }}</td>
    </tr>
@empty
    <tr>
        <td colspan="100%" class="text-center">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
