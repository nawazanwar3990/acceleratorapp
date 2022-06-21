@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>
            @isset($record->device_type)
                {{ $record->device_type->name }}
            @else
                --
            @endif
        </td>
        <td>
            @isset($record->device_class)
                {{ $record->device_class->name }}
            @else
                --
            @endif
        </td>
        <td>
            @isset($record->device_location)
                {{ $record->device_location->name }}
            @else
                --
            @endif
        </td>
        <td>
            @isset($record->device_make)
                {{ $record->device_make->name }}
            @else
                --
            @endif
        </td>
        <td>
            @isset($record->device_model)
                {{ $record->device_model->name }}
            @else
                --
            @endif
        </td>
        <td>
            @isset($record->device_operating_system)
                {{ $record->device_operating_system->name }}
            @else
                --
            @endif
        </td>
        <td>
            {{ $record->device_name }}
        </td>
        <td>
            {{ $record->device_ip_address }}
        </td>
        <td>
            {{ $record->device_username }}
        </td>
        <td>
            {{ $record->device_password }}
        </td>
        <td>
            {{ $record->device_connection_string }}
        </td>
        <td>
            {{ $record->device_generation }}
        </td>
        <td>
            {{ $record->device_mac_address }}
        </td>
        <td>
            {{ $record->device_serial_number }}
        </td>
        <td>
            {{ $record->device_admin_login }}
        </td>
        <td>
            {{ $record->device_admin_password }}
        </td>
        <td>
            {{ $record->device_lot_number }}
        </td>
        <td>
            {{ $record->device_lot_date }}
        </td>
        <td>
            {{ $record->device_other_info }}
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.devices.edit', $record->id),
                'delete' => route('dashboard.devices.destroy', $record->id),
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
