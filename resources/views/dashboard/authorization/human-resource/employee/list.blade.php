@forelse($records as $record)
    <tr>
        <td>{{ $record->id }}</td>
        <td>{{ $record->Hr->full_name }}</td>
        <td>{{ $record->Hr->cnic }}</td>
        <td>{{ $record->Hr->cell_1 }}</td>
        <td>{{ \App\Services\EmployeeService::getSalaryTypesForDropDown( $record->salary_type) }}</td>
        <td>{{  $record->department->name }}</td>
        <td>{{  $record->designation->name }}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.employees.edit', $record->id),
                'delete' => route('dashboard.employees.destroy', $record->id),
                'show' => route('dashboard.human-resource.show', $record->Hr->id),
            ])
        </td>
    </tr>
@empty
    <tr>
        <td class="text-center" colspan="8">
            {{ __('general.no_record_found') }}
        </td>
    </tr>
@endforelse
