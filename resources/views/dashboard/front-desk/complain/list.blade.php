@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->complainType->name ?? null}}</td>
        <td>{{ $record->source->name ?? null}}</td>
        <td>
            {{ $record->complain_by }}
        </td>
        <td>
            {{ $record->phone }}
        </td>
        <td>
            {{ $record->date }}
        </td>
        <td>
            {{ $record->action_taken }}
        </td>
        <td>
            {{ $record->assigned }}
        </td>
        <td>
            {{ $record->note }}
        </td>
        <td>
            <a href="{{ url(\App\Services\GeneralService::getDocumentMedia('complain_document',$record->id)) }}" class="btn btn-success" download>
                <i class="fa fa-download"></i>
            </a>
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.complain.edit', $record->id),
                'delete' => route('dashboard.complain.destroy', $record->id),
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
