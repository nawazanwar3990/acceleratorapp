<script>
    function apply_office_plan_subscription(
        subscription_id,
        subscribed_id,
        owner_id,
        model_id
    ) {
        Swal.fire({
            title: 'Payment For Subscription',
            html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "Proceeded",
            confirmButtonColor: '#01023B',
            cancelButtonColor: '#01023B',
            focusConfirm: false,
            preConfirm: () => {
                const payment_type = Swal.getPopup().querySelector('#payment_type').value
                if (!payment_type) {
                    Swal.showValidationMessage(`First Choose Payment Type`)
                }
                return {
                    payment_type: payment_type,
                    subscription_id: subscription_id,
                    subscribed_id: subscribed_id,
                    owner_id: owner_id,
                    model_id: model_id,
                    model_type: 'office',
                }
            }
        }).then((result) => {
            let payment_type = result.value.payment_type;
            let subscription_id = result.value.subscription_id;
            let owner_id = result.value.owner_id;
            let subscribed_id = result.value.subscribed_id;
            let model_id = result.value.model_id;
            let model_type = result.value.model_type;
            if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                Swal.fire({
                    title: 'Manage Payment',
                    html: `<div class="fs-13" style="text-align:left;">{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}{!!  Html::decode(Form::label('file_name' ,__('general.receipt'),['class'=>'form-label'])) !!}{{ Form::file('file_name',['class'=>'form-control dropify','id'=>'file_name']) }}</div>`,
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonText: "Proceeded",
                    confirmButtonColor: '#01023B',
                    cancelButtonColor: '#01023B',
                    focusConfirm: false,
                    preConfirm: () => {
                        const transaction_id = Swal.getPopup().querySelector('#transaction_id').value;
                        let file_name = Swal.getPopup().querySelector('#file_name');
                        file_name = file_name.files[0];
                        if (!file_name) {
                            Swal.showValidationMessage(`Please Choose Receipt in jpg,png format`)
                        }
                        if (!transaction_id) {
                            Swal.showValidationMessage(`First Enter Transaction ID`)
                        }
                        return {
                            payment_type: payment_type,
                            transaction_id: transaction_id,
                            file_name: file_name,
                            subscription_id: subscription_id,
                            subscribed_id: subscribed_id,
                            model_id: model_id,
                            model_type: model_type,
                            owner_id: owner_id,
                        }
                    }
                }).then((result) => {
                    Swal.fire({
                        html: '<?php echo __('general.request_wait'); ?>',
                        allowOutsideClick: () => !Swal.isLoading()
                    });
                    Swal.showLoading();
                    let transaction_id = result.value.transaction_id;
                    let file_name = result.value.file_name;
                    let payment_type = result.value.payment_type;
                    let subscription_id = result.value.subscription_id;
                    let subscribed_id = result.value.subscribed_id;
                    let model_id = result.value.model_id;
                    let model_type = result.value.model_type;
                    let owner_id = result.value.owner_id;
                    let data = new FormData();
                    data.append('transaction_id', transaction_id);
                    data.append('file_name', file_name);
                    data.append('payment_type', payment_type);
                    data.append('subscription_id', subscription_id);
                    data.append('subscribed_id', subscribed_id);
                    data.append('model_id', model_id);
                    data.append('model_type', model_type);
                    data.append('owner_id', owner_id);
                    Ajax.setAjaxHeader();
                    $.ajax({
                        url: "{{ route('website.office-subscriptions.store')}}",
                        method: 'POST',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.status === true) {
                                location.assign(response.route);
                            }
                        },
                        error: function (response) {
                        }
                    });
                });
            } else {

            }
        });
    }
    @isset($subscription)
    function apply_expire_payment() {
        Swal.fire({
            title: '{{ trans('general.apply_payment') }}',
            html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "Proceeded",
            confirmButtonColor: '#01023B',
            cancelButtonColor: '#01023B',
            focusConfirm: false,
            preConfirm: () => {
                const payment_type = Swal.getPopup().querySelector('#payment_type').value
                if (!payment_type) {
                    Swal.showValidationMessage(`First Choose Payment Type`)
                }
                return {payment_type: payment_type}
            }
        }).then((result) => {
            let payment_type = result.value.payment_type;
            if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                Swal.fire({
                    title: 'Manage Payment',
                    html: `<div class="fs-13" style="text-align:left;">{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}{!!  Html::decode(Form::label('file_name' ,__('general.receipt'),['class'=>'form-label'])) !!}{{ Form::file('file_name',['class'=>'form-control dropify','id'=>'file_name']) }}</div>`,
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonText: "Proceeded",
                    confirmButtonColor: '#01023B',
                    cancelButtonColor: '#01023B',
                    focusConfirm: false,
                    preConfirm: () => {
                        const transaction_id = Swal.getPopup().querySelector('#transaction_id').value;
                        let file_name = Swal.getPopup().querySelector('#file_name');
                        file_name = file_name.files[0];
                        if (!file_name) {
                            Swal.showValidationMessage(`Please Choose Receipt in jpg,png format`)
                        }
                        if (!transaction_id) {
                            Swal.showValidationMessage(`First Enter Transaction ID`)
                        }
                        return {
                            transaction_id: transaction_id,
                            file_name: file_name
                        }
                    }
                }).then((result) => {
                    Swal.fire({
                        html: '<?php echo __('general.request_wait'); ?>',
                        allowOutsideClick: () => !Swal.isLoading()
                    });
                    Swal.showLoading();
                    let transaction_id = result.value.transaction_id;
                    let file_name = result.value.file_name;
                    let data = new FormData();
                    data.append('payment_type', payment_type);
                    data.append('transaction_id', transaction_id);
                    data.append('subscription_id', "{{ $subscription->id }}");
                    data.append('subscribed_id', "{{ $subscription->subscribed_id }}");
                    data.append('payment_for', "{{ \App\Enum\PaymentForEnum::PACKAGE_EXPIRE }}");
                    data.append('price', "{{ $subscription->package->price }}");
                    data.append('file_name', file_name);
                    Ajax.setAjaxHeader();
                    $.ajax({
                        url: "{{ route('website.package-payment.store')}}",
                        method: 'POST',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.status === true) {
                                location.reload();
                            }
                        },
                        error: function (response) {
                        }
                    });
                });
            } else {
                Swal.fire(
                    'Pending!',
                    'This will be don later!',
                    'pending'
                )
            }
        });
    }

    function apply_pending_payment() {
        Swal.fire({
            title: '{{ trans('general.apply_payment') }}',
            html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "Proceeded",
            confirmButtonColor: '#01023B',
            cancelButtonColor: '#01023B',
            focusConfirm: false,
            preConfirm: () => {
                const payment_type = Swal.getPopup().querySelector('#payment_type').value
                if (!payment_type) {
                    Swal.showValidationMessage(`First Choose Payment Type`)
                }
                return {payment_type: payment_type}
            }
        }).then((result) => {
            let payment_type = result.value.payment_type;
            if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                Swal.fire({
                    title: 'Manage Payment',
                    html: `<div class="fs-13" style="text-align:left;">{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}{!!  Html::decode(Form::label('file_name' ,__('general.receipt'),['class'=>'form-label'])) !!}{{ Form::file('file_name',['class'=>'form-control dropify','id'=>'file_name']) }}</div>`,
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonText: "Proceeded",
                    confirmButtonColor: '#01023B',
                    cancelButtonColor: '#01023B',
                    focusConfirm: false,
                    preConfirm: () => {
                        const transaction_id = Swal.getPopup().querySelector('#transaction_id').value;
                        let file_name = Swal.getPopup().querySelector('#file_name');
                        file_name = file_name.files[0];
                        if (!file_name) {
                            Swal.showValidationMessage(`Please Choose Receipt in jpg,png format`)
                        }
                        if (!transaction_id) {
                            Swal.showValidationMessage(`First Enter Transaction ID`)
                        }
                        return {
                            transaction_id: transaction_id,
                            file_name: file_name
                        }
                    }
                }).then((result) => {
                    Swal.fire({
                        html: '<?php echo __('general.request_wait'); ?>',
                        allowOutsideClick: () => !Swal.isLoading()
                    });
                    Swal.showLoading();
                    let transaction_id = result.value.transaction_id;
                    let file_name = result.value.file_name;
                    let data = new FormData();

                    data.append('payment_type', payment_type);
                    data.append('transaction_id', transaction_id);
                    data.append('subscription_id', "{{ $subscription->id }}");
                    data.append('subscribed_id', "{{ $subscription->subscribed_id }}");
                    data.append('payment_for', "{{ \App\Enum\PaymentForEnum::PACKAGE_APPROVAL }}");
                    data.append('price', "{{ $subscription->package->price }}");
                    data.append('file_name', file_name);

                    Ajax.setAjaxHeader();
                    $.ajax({
                        url: "{{ route('website.package-payment.store')}}",
                        method: 'POST',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.status === true) {
                                location.reload();
                            }
                        },
                        error: function (response) {
                        }
                    });
                });
            } else {
                Swal.fire(
                    'Pending!',
                    'This will be don later!',
                    'pending'
                )
            }
        });
    }
    @endisset
    function apply_mentor_subscription() {

        let subscription = $("input[name='subscription_id']:checked");
        let subscription_id = subscription.val();
        if (subscription_id === undefined) {
            showError("First Choose Package for Subscription")
        } else {
            let payment_token_number = Date.now();
            Swal.fire({
                title: 'Request Package Subscription',
                html: '<table class="table table-sm table-bordered"><tr><th style="font-size:13px;">Package</th><td style="font-size:13px;">' + subscription.attr("data-name") + '</td></tr><tr><th style="font-size:13px;">Price</th><td style="font-size:13px;">' + subscription.attr("data-price") + '</td><tr><tr><th style="font-size:13px;">Expiry Data</th><td style="font-size:13px;">' + subscription.attr("data-expiry") + '</td></tr><tr><th style="font-size:13px;">Payment Token Number</th><td style="font-size:13px;">' + payment_token_number + '</td></tr><tr><th style="font-size:13px;">Additional Information</th><td style="font-size:13px;">{{ Form::textarea('payment_addition_information',null,['id'=>'payment_addition_information','class'=>'form-control form-control-sm','rows'=>2]) }}</td></tr></table>',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#01023B',
                cancelButtonColor: '#01023B',
                focusConfirm: false,
                preConfirm: () => {
                    const payment_addition_information = Swal.getPopup().querySelector('#payment_addition_information').value;
                    return {
                        payment_token_number: payment_token_number,
                        payment_addition_information: payment_addition_information
                    }
                }
            }).then((result) => {
                let payment_token_number = result.value.payment_token_number;
                let payment_addition_information = result.value.payment_addition_information;
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let data = {
                    'payment_token_number': payment_token_number,
                    'payment_addition_information': payment_addition_information,
                    'subscription_id': $("input[name='subscription_id']:checked").val(),
                    'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}',
                    'subscribed_id': '{{ isset($model)?$model->user_id:0 }}'
                }
                Ajax.call("{{ route('website.mentors.store',[isset($payment)?$payment:null,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null]) }}", data, 'POST', function (response) {
                    if (response.status === true) {
                        location.assign(response.url);
                    }
                })
            });
        }
    }

    function apply_freelancer_subscription() {

        let subscription = $("input[name='subscription_id']:checked");
        let subscription_id = subscription.val();
        if (subscription_id === undefined) {
            showError("First Choose Package for Subscription")
        } else {
            let payment_token_number = Date.now();
            Swal.fire({
                title: 'Request Package Subscription',
                html: '<table class="table table-sm table-bordered"><tr><th style="font-size:13px;">Package</th><td style="font-size:13px;">' + subscription.attr("data-name") + '</td></tr><tr><th style="font-size:13px;">Price</th><td style="font-size:13px;">' + subscription.attr("data-price") + '</td><tr><tr><th style="font-size:13px;">Expiry Data</th><td style="font-size:13px;">' + subscription.attr("data-expiry") + '</td></tr><tr><th style="font-size:13px;">Payment Token Number</th><td style="font-size:13px;">' + payment_token_number + '</td></tr><tr><th style="font-size:13px;">Additional Information</th><td style="font-size:13px;">{{ Form::textarea('payment_addition_information',null,['id'=>'payment_addition_information','class'=>'form-control form-control-sm','rows'=>2]) }}</td></tr></table>',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#01023B',
                cancelButtonColor: '#01023B',
                focusConfirm: false,
                preConfirm: () => {
                    const payment_addition_information = Swal.getPopup().querySelector('#payment_addition_information').value;
                    return {
                        payment_token_number: payment_token_number,
                        payment_addition_information: payment_addition_information
                    }
                }
            }).then((result) => {
                let payment_token_number = result.value.payment_token_number;
                let payment_addition_information = result.value.payment_addition_information;
                let payment_type = result.value.payment_type;
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let data = {
                    'payment_token_number': payment_token_number,
                    'payment_addition_information': payment_addition_information,
                    'subscription_id': $("input[name='subscription_id']:checked").val(),
                    'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}',
                    'subscribed_id': '{{ isset($model)?$model->user_id:0 }}'
                }
                Ajax.call("{{ route('website.freelancers.store',[isset($type)?$type:null,isset($payment)?$payment:null,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null]) }}", data, 'POST', function (response) {
                    if (response.status === true) {
                        location.assign(response.url);
                    }
                })
            });
        }
    }

    function apply_ba_subscription() {

        let subscription = $("input[name='subscription_id']:checked");
        let subscription_id = subscription.val();
        if (subscription_id === undefined) {
            showError("First Choose Package for Subscription")
        } else {
            let payment_token_number = Date.now();
            Swal.fire({
                title: 'Request Package Subscription',
                html: '<table class="table table-sm table-bordered"><tr><th style="font-size:13px;">Package</th><td style="font-size:13px;">' + subscription.attr("data-name") + '</td></tr><tr><th style="font-size:13px;">Price</th><td style="font-size:13px;">' + subscription.attr("data-price") + '</td><tr><tr><th style="font-size:13px;">Expiry Data</th><td style="font-size:13px;">' + subscription.attr("data-expiry") + '</td></tr><tr><th style="font-size:13px;">Payment Token Number</th><td style="font-size:13px;">' + payment_token_number + '</td></tr><tr><th style="font-size:13px;">Additional Information</th><td style="font-size:13px;">{{ Form::textarea('payment_addition_information',null,['id'=>'payment_addition_information','class'=>'form-control form-control-sm','rows'=>2]) }}</td></tr></table>',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#01023B',
                cancelButtonColor: '#01023B',
                focusConfirm: false,
                preConfirm: () => {
                    const payment_addition_information = Swal.getPopup().querySelector('#payment_addition_information').value;
                    return {
                        payment_token_number: payment_token_number,
                        payment_addition_information: payment_addition_information
                    }
                }
            }).then((result) => {
                let payment_token_number = result.value.payment_token_number;
                let payment_addition_information = result.value.payment_addition_information;
                Swal.fire({
                    html: '{!! __('general.request_wait') !!}',
                    allowOutsideClick: () => !Swal.isLoading()
                });
                Swal.showLoading();
                let data = {
                    'payment_token_number': payment_token_number,
                    'payment_addition_information': payment_addition_information,
                    'subscription_id': $("input[name='subscription_id']:checked").val(),
                    'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PACKAGE }}',
                    'subscribed_id': '{{ isset($model)?$model->user_id:0 }}'
                }
                Ajax.call("{{ route('website.ba.store',[isset($type)?$type:null,isset($payment)?$payment:null,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null]) }}", data, 'POST', function (response) {
                    if (response.status === true) {
                        location.assign(response.url);
                    }
                })
            });
        }
    }

    function change_limit_switcher(cElement) {
        let element = $(cElement);
        let is_checked = element.is(":checked");
        let holder = element.closest('.input-group').find('input[type=text]');
        if (is_checked === true) {
            holder.val(element.val()).attr('readonly', 'readonly');
        } else {
            holder.val('').removeAttr('readonly');
        }
    }

    function toSlug(str) {
        str = str.replace(/^\s+|\s+$/g, ""); // trim
        str = str.toLowerCase();
        const from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        const to = "aaaaeeeeiiiioooouuuunc------";
        let i = 0, l = from.length;
        for (; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
        }

        str = str
            .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
            .replace(/\s+/g, "-") // collapse whitespace and replace by -
            .replace(/-+/g, "-"); // collapse dashes
        return str;
    }

    let Custom = new function () {
        this.makeUser = function (person_id) {
            if (confirm('are you ready to Create a new User')) {
                Ajax.call('{{ route('dashboard.users.store') }}', {
                    'person_id': person_id,
                    'state': 'add',
                }, 'POST', function (response) {
                    if (response.status === 'add') {
                        alert("User is Added Successfully");
                        location.reload();
                    } else {
                        alert("Successfully Removed the user");
                        location.reload();
                    }
                });
            }
        }
    };

    function changeEventOrganizedFor(cElement) {

        let event_user_type_holder = $("#event_user_type_holder");
        event_user_type_holder.removeClass('d-none d-block');

        let value = $(cElement).find('option:selected').val();
        if (value === 'non_registered_user') {
            showError('First Register a New User');
            event_user_type_holder.addClass('d-none');
        } else {
            event_user_type_holder.addClass('d-block');
        }
    }

    function changeEventUserType(cElement) {

        let event_user_id_holder = $("#event_user_id_holder");
        event_user_id_holder.removeClass('d-none d-block');
        let value = $(cElement).find('option:selected').val();
        if (value === '') {
            showError('First Select the User Type');
            event_user_id_holder.addClass('d-none');
        } else {
            event_user_id_holder.addClass('d-block');
            let new_added_value = '';
            if (value === 'mentor') {
                new_added_value = "{{ trans('general.enter_mentor_id') }}";
            } else if (value === 'service_provider_company') {
                new_added_value = "{{ trans('general.enter_service_provider_id') }}";
            } else if (value === 'freelancer') {
                new_added_value = "{{ trans('general.enter_freelancer_id') }}";
            } else if (value === 'business_accelerator_individual') {
                new_added_value = "{{ trans('general.enter_ba_id') }}";
            } else if (value === 'business_accelerator') {
                new_added_value = "{{ trans('general.enter_ba_company_id') }}";
            }
            event_user_id_holder.find('label').empty().text(new_added_value);
        }
    }

    function getUserByType(cElement) {
        let user_id = $("#event_user_id").val();
        let user_type = $("#event_user_type").find('option:selected').val();
        $(".extra_info_field").remove();
        if (user_id === '') {
            showError('First Enter User Id');
        } else {
            let route = "/api/user-info-cols-by/" + user_id + "/" + user_type;
            Ajax.call(route, null, 'GET', function (response) {
                console.log(response);
                if (response.status === false) {
                    showError('No Data Found With This User Id');
                } else {
                    $(cElement).closest('#event_user_id_holder').after(response.html);
                }
            });
        }
    }

    function showError(errorMsg) {
        $.toast({
            heading: "<?php echo e(__('general.error')); ?>",
            text: errorMsg,
            position: 'top-right',
            icon: 'error',
            hideAfter: 3000,
            stack: 6
        });
    }

    function showSuccessMessage(message) {
        $.toast({
            heading: "<?php echo e(__('general.success')); ?>",
            text: message,
            position: 'top-right',
            icon: 'success',
            hideAfter: 3000,
            stack: 6
        });
    }

    function showLoadingMessage() {
        $.toast({
            heading: "Loading",
            text: 'Please wait while loading data',
            position: 'top-right',
            icon: 'info',
            hideAfter: 1000,
            stack: 6
        });
    }

    function loadInfo(cElement, type) {
        let parents = $(".parents");
        if (parents.length > 4) {
            showError('You can only Send Request to 4 Mentors');
        } else {
            showLoadingMessage();
            $(cElement).closest('.main_data_holder').find('.data_holder').empty();
            const selected = [];
            $(cElement).find('option:selected').each(function () {
                let value = $(this).val();
                selected.push(value);
            });
            for (const selectedKey in selected) {
                Ajax.call("{{ route('api.ba.info') }}", {
                    'ids': selected,
                    'type': type
                }, '{{ \App\Enum\MethodEnum::POST }}', function (response) {
                    if (response.status === true) {
                        $(cElement).closest('.main_data_holder').find('.data_holder').empty().html(response.html);
                    }
                });
            }
        }
    }

    function applyEventType(cElement) {
        let sub_types = JSON.parse($(cElement).find('option:selected').attr('data-sub-types'));
        let options = "<option value='' selected>{{ trans('general.select') }}</option>";
        if (sub_types.length > 0) {
            $.each(sub_types, function (inner_key, inner_value) {
                options += "<option value=" + inner_value.slug + ">" + inner_value.name + "</option>";
            });
        }
        $(cElement)
            .closest('.event_type_holder')
            .next('.event_child_type_holder')
            .find('select')
            .empty()
            .html(options);
    }

    function applyMeetingType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: '{{ trans('general.other_meeting_type') }}',
                input: 'text',
                inputPlaceholder: '{{ trans('general.enter_value') }}',
            }).then(({value}) => {
                let holder = $("#meeting_parent_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
                $("#meeting_parent_sub_type").empty()
                    .append("<option value='' selected>{{ trans('general.select') }}</option><option value='other' selected>{{ trans('general.other') }}</option>")
                    .val('');
            });
        } else {
            let sub_types = JSON.parse($(cElement).find('option:selected').attr('data-sub-types'));
            let options = "<option value='' selected><?php echo e(trans('general.select')); ?></option>";
            if (sub_types.length > 0) {
                $.each(sub_types, function (inner_key, inner_value) {
                    options += "<option value=" + inner_value.slug + ">" + inner_value.name + "</option>";
                });
            }
            $(cElement)
                .closest('.meeting_type_holder')
                .next('.meeting_child_type_holder')
                .find('select')
                .empty()
                .html(options);
        }

    }

    function changeMeetingSubType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: '{{ trans('general.other_meeting_sub_type') }}',
                input: 'text',
                inputPlaceholder: '{{ trans('general.enter_value') }}',
            }).then(({value}) => {
                let holder = $("#meeting_parent_sub_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function getFormattedDate(date) {
        let year = date.getFullYear();
        let month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;
        let day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;
        return month + "/" + day + "/" + year;
    }

    function calculate_event_end_date(cElement) {
        let start_date = $("#event_start_date").val();
        let days = $(cElement).val();
        let dt = new Date(start_date);
        dt.setDate(dt.getDate() + parseInt(days));
        $("#event_end_date").val(getFormattedDate(dt));
    }

    function changeEventSubType(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Sub Type',
                text: 'Enter Other Sub Type',
                input: 'text',
                inputPlaceholder: 'sub type',
            }).then(({value}) => {
                let holder = $("#event_sub_type");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function addOtherOrganizedBy(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Organized By',
                text: 'Enter Organized By',
                input: 'text',
                inputPlaceholder: 'Enter Value',
            }).then(({value}) => {
                let holder = $("#event_organized_by");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function addOtherOrganizedFor(cElement) {
        let value = $(cElement).find('option:selected').val();
        if (value === 'other') {
            Swal.fire({
                title: 'Other Organized For',
                text: 'Enter Organized For',
                input: 'text',
                inputPlaceholder: 'Enter Value',
            }).then(({value}) => {
                let holder = $("#event_organized_for");
                let slug = toSlug(value);
                let html = "<option value=" + slug + ">" + value + "</option>";
                holder.append(html);
                holder.val(slug);
            });
        }
    }

    function manage_meeting_type(cElement) {
        let value = $(cElement).find('option:selected').val();
        let holder = $("#meeting_type_description_holder");

        holder.removeClass('d-none d-block');
        if (value === 'physical') {
            holder.addClass('d-block');
            holder.find('label').text('Description');
            holder.find('input').removeAttr('type').attr('type', 'text');
        } else {
            holder.addClass('d-block');
            holder.find('label').text('Paste Url');
            holder.find('input').removeAttr('type').attr('type', 'url');
        }
    }

    function isAppliedTicket(cElement) {
        let value = $(cElement).find('option:selected').val();
        let holder = $("#is_applied_holder");
        holder.removeClass('d-none d-block');
        if (value === 'yes') {
            holder.addClass('d-block');
        } else {
            holder.addClass('d-none');
        }
    }

    function changeTicketType(cElement) {
        let value = $(cElement).val();
        let holder = $("#per_person_cost_holder");
        holder.removeClass('d-none d-block');
        if (value === 'paid') {
            holder.addClass('d-block');
        } else {
            holder.addClass('d-none');
        }
    }

    let Ajax = new function () {
        let parent = this;
        this.call = function (url, data, method = 'GET', callback) {
            Ajax.setAjaxHeader();
            $.ajax({
                type: method,
                global: false,
                async: true,
                url: url,
                data: data,
                success: function (response) {
                    callback(response);
                },
                error: function () {
                    console.log("Error Occurred");
                }
            });
        };
        this.setAjaxHeader = function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                }
            });
        };
    };
</script>
