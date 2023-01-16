<div class="card border parents mb-2">
    <div class="card-header">
        <h6 class="mb-0">List of all Selected Mentors</h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Sr#</th>
                <th>{{ trans('general.logo') }}</th>
                <th>{{ trans('general.company_name') }}</th>
                <th>{{ trans('general.company_email') }}</th>
                <th>{{ trans('general.contact') }}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($data as $d)
                <tr class="parents">
                    <td>
                        {!! Form::hidden('mentors[]',$d->id) !!}
                        {{ $loop->index+1 }}
                    </td>
                    <td>
                        <img style="height: 34px;border-radius: 50%;" src="{{ (isset($d->logo) && count($d->logo))?asset($d->logo[0]->filename):asset('uploads/default_startup.png') }}" alt="">
                    </td>
                    <td>{{ $d->company_name }}</td>
                    <td>{{ $d->company_email }}</td>
                    <td>{{ $d->company_contact_no }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">No Record Selected</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>