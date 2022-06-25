@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->to_title}}</td>
        <td>{{ $record->from_title}}</td>
        <td>
            {{ $record->reference_no }}
        </td>
        <td>
            {{ $record->address }}
        </td>
        <td>
            {{ $record->date }}
        </td>
        <td>
            {{ $record->note }}
        </td>
        <td>
            <a href="{{ url(\App\Services\GeneralService::getDocumentMedia('postal_dispatch_document',$record->id)) }}" class="btn btn-success" download>
                <i class="fa fa-download"></i>
            </a>
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.postal-dispatch.edit', $record->id),
                'delete' => route('dashboard.postal-dispatch.destroy', $record->id),
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
