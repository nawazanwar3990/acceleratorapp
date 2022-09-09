@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\ReceiptTableHeading::getTranslationKeys()])
                        <tbody>
                        @forelse($records  as $record)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    @isset($record->subscribed)
                                        {{ $record->subscribed->getFullName() }}
                                    @endisset
                                </td>
                                <td>
                                    @if($record->payment_type)
                                        {{ \App\Enum\PaymentTypeEnum::getTranslationKeyBy($record->payment_type) }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td>
                                    @if($record->payment_for)
                                        {{ \App\Enum\PaymentForEnum::getTranslationKeyBy($record->payment_for) }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td>
                                    {{ $record->transaction_id }}
                                </td>
                                <td>
                                    {{ $record->price }}  {{ \App\Services\GeneralService::get_default_currency() }}
                                </td>
                                <td class="text-center">
                                    @if($type==\App\Enum\SubscriptionTypeEnum::OFFICE)
                                        @include('dashboard.payment-receipts.components.office-action')
                                    @else
                                        @include('dashboard.payment-receipts.components.package-action')
                                    @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function approved_subscription(subscription_id) {
            Swal.fire({
                title: '{{ trans('general.approved') }}',
                html: '{!! Form::textarea('reason',null,['class'=>'form-control','placeholder'=>trans('general.reason_for_approving'),'rows'=>'3','id'=>'reason']) !!}',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#00b289',
                cancelButtonColor: '#00b289',
                focusConfirm: false,
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value
                    if (!reason) {
                        Swal.showValidationMessage(`Please Enter Reason`)
                    }
                    return {
                        reason: reason,
                    }
                }
            }).then((result) => {
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let reason = result.value.reason;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    }
                });
                $.ajax({
                    url: '/dashboard/subscription/' + subscription_id + '/{{ \App\Enum\SubscriptionStatusEnum::APPROVED }}/update',
                    method: 'POST',
                    data: {
                        reason: reason,
                        subscription_for: '{{ request()->query('type') }}',
                        type: '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}'
                    },
                    success: function (response) {
                        if (response.status === true) {
                            location.assign(response.route);
                        }
                    },
                    error: function (response) {
                    }
                });
            });
        }

        function decline_subscription(subscription_id) {
            Swal.fire({
                title: '{{ trans('general.declined') }}',
                html: '{!! Form::textarea('reason',null,['class'=>'form-control','placeholder'=>trans('general.reason_for_declining_subscription'),'rows'=>'3','id'=>'reason']) !!}',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#00b289',
                cancelButtonColor: '#00b289',
                focusConfirm: false,
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value
                    if (!reason) {
                        Swal.showValidationMessage(`Please Enter Reason`)
                    }
                    return {
                        reason: reason,
                    }
                }
            }).then((result) => {
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let reason = result.value.reason;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    }
                });
                $.ajax({
                    url: '/dashboard/subscription/' + subscription_id + '/{{ \App\Enum\SubscriptionStatusEnum::DECLINED }}/update',
                    method: 'POST',
                    data: {
                        reason: reason,
                        subscription_for: '{{ request()->query('type') }}',
                        type: '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}'
                    },
                    success: function (response) {
                        if (response.status === true) {
                            location.assign(response.route);
                        }
                    },
                    error: function (response) {
                    }
                });
            });
        }

        function renew_subscription(subscription_id) {
            Swal.fire({
                title: '{{ trans('general.renew') }}',
                html: '{!! Form::textarea('reason',null,['class'=>'form-control','placeholder'=>trans('general.reason_for_renew_subscription'),'rows'=>'3','id'=>'reason']) !!}',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#00b289',
                cancelButtonColor: '#00b289',
                focusConfirm: false,
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value
                    if (!reason) {
                        Swal.showValidationMessage(`Please Enter Reason`)
                    }
                    return {
                        reason: reason,
                    }
                }
            }).then((result) => {
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let reason = result.value.reason;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                    }
                });
                $.ajax({
                    url: '/dashboard/subscription/' + subscription_id + '/{{ \App\Enum\SubscriptionStatusEnum::RENEW }}/update',
                    method: 'POST',
                    data: {
                        reason: reason,
                        subscription_for: '{{ request()->query('type') }}',
                        type: '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}'
                    },
                    success: function (response) {
                        if (response.status === true) {
                            location.assign(response.route);
                        }
                    },
                    error: function (response) {
                    }
                });
            });
        }
    </script>
@endsection
