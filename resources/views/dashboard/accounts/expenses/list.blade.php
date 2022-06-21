@forelse($records as $record)
    <tr @class(['alert-danger' => ($record->is_paid == false)])>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $record->voucher_no }}</td>
        <td>{{ $record->expenseHead->expense_head_name }}</td>
        <td>{{ \App\Services\GeneralService::formatDate( $record->date) }}</td>
        <td>{{ \App\Services\GeneralService::number_format( $record->amount) }}</td>
        <td>{{ $record->paymentAccount->HeadName }}</td>
        <td>{{ $record->description }}</td>
        <td class="text-center">
            @if(file_exists($record->attachment))
                <a href="{{ url($record->attachment) }}" class="btn btn-primary btn-xs" target="_blank">{{ __('general.view') }}</a>
            @endif
        </td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">{{__('general.action')}}</button>
                <ul class="dropdown-menu">
                    @if ($record->is_paid == false)
                    <li>
                        <a class="dropdown-item text-black-50" href="{{ route('dashboard.expenses.edit', $record->id) }}">
                            {{__('general.edit')}}
                        </a>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" onclick="DeleteEntry({{ $record->id }});">{{__('general.delete')}}</button>
                        <form action="{{ route('dashboard.expenses.destroy',$record->id) }}" method="POST" id="deleteForm{{$record->id}}" style="display: none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <button class="dropdown-item" type="button" onclick="markPaid({{ $record->id }});">{{__('general.mark_as_paid')}}</button>
                    </li>
                    @endif
                </ul>
            </div>
        </td>
    </tr>

    @empty
        <tr>
            <td class="text-center" colspan="7">
                {{ __('general.no_record_found') }}
            </td>
        </tr>
    @endforelse
