@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->name}}</td>
       <td>{{ $record->user->full_name}}</td>
       <td>{{ $record->slug}}</td>
        <td>{{ \App\Services\GeneralService::activeStatus($record->is_active)}}</td>
        <td>{{$record->price}}</td>
        <td>{{ \App\Enum\PlanTypeEnum::getTranslationKeyBy($record->type)}}</td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.plans.edit', $record->id),
                'delete' => route('dashboard.plans.destroy', $record->id),
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
