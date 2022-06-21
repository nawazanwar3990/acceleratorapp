@forelse($records as $record)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $record->purpose->name ?? null}}</td>
        <td>{{ $record->name ?? null}}</td>
        <td>
            {{ $record->phone }}
        </td>
        <td>
            {{ $record->cnic }}
        </td>
        <td>
            {{ $record->no_person }}
        </td>
        <td>
            {{ $record->date }}
        </td>
        <td>
            {{ $record->time_in }}
        </td>
        <td>
            {{ $record->time_out }}
        </td>
        <td>
            {{ $record->note }}
        </td>
        <td>
            <a href="{{ url(\App\Services\GeneralService::getDocumentMedia('visitor_book_document',$record->id)) }}" class="btn btn-success" download>
                <i class="fa fa-download"></i>
            </a>
        </td>
        <td class="text-center">
            @include('components.General.table-actions', [
                'edit' => route('dashboard.visitor-book.edit', $record->id),
                'delete' => route('dashboard.visitor-book.destroy', $record->id),
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
