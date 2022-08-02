@section('inner-script-files')
@endsection
@section('innerScript')
    <script>
        function apply_subscription(object, model_id, sitting_capacity) {
            object = JSON.parse(object);
            let html = "<table class='table table-bordered'><thead><tr><th>{{__('general.name')}}</th><th>{{__('general.price')}}</th><th>{{__('general.basic_service')}}</th><th>{{__('general.additional_service')}}</th><th>{{__('general.action')}}</th></tr></thead><tbody>";
            object.forEach((value, index) => {
                let row = "<tr>";
                row += "<td>" + value.name + "</td>";
                row += "<td>" + value.price + " {{ \App\Services\GeneralService::get_default_currency() }}</td>";
                let basic_services = value.basic_services;
                if (basic_services.length > 0) {
                    let basic_html = '<ul class="list-group list-group-flush bg-transparent">'
                    basic_services.forEach((basic_value, basic_index) => {
                        basic_html += '<li class="list-group-item py-0 border-0  bg-transparent px-0"> <i class="bx bx-check text-success"></i> <small><strong class="text-infogit">' + basic_value.name + '</small></li>';
                    });
                    basic_html += "</ul>";
                    row += "<td>" + basic_html + "</td>";
                }
                let additional_services = value.additional_services;
                if (additional_services.length > 0) {
                    let additional_html = '<ul class="list-group list-group-flush bg-transparent">'
                    additional_services.forEach((additional_value, additional_index) => {
                        additional_html += '<li class="list-group-item py-0 border-0  bg-transparent px-0"> <i class="bx bx-check text-success"></i> <small><strong class="text-infogit">' + additional_value.name + '</small></li>';
                    });
                    additional_html += "</ul>";
                    row += "<td>" + additional_html + "</td>";
                }
                let checked = '';
                if (index === 0) {
                    checked = 'checked';
                }
                row += "<td><input type='radio' name='subscription_id'" +
                    " class='subscription_id' " +
                    " value=" + value.id + " " + checked + "" +
                    " data-price=" + value.price +
                    " data-name=" + value.name +
                    "></td>";
                row += "</tr>";
                html += row;
            });
            html += "</tbody></table>";
            Swal.fire({
                title: 'Select Plan',
                html: html,
                width: 900,
                confirmButtonText: 'Next',
                focusConfirm: false,
                preConfirm: () => {
                    const subscription_id = Swal.getPopup().querySelector("input[name=subscription_id]:checked").value;
                    const price = Swal.getPopup().querySelector("input[name=subscription_id]:checked").getAttribute('data-price');
                    const name = Swal.getPopup().querySelector("input[name=subscription_id]:checked").getAttribute('data-name');
                    return {
                        subscription_id: subscription_id,
                        price: price,
                        name: name
                    }
                }
            }).then((result) => {
                let subscription_id = result.value.subscription_id;
                let price = parseFloat(result.value.price) * parseFloat(sitting_capacity);
                let name = result.value.name;
                let html = "<table class='table table-bordered my-2'><thead><tr><th class='fs-13' style='padding:5px; !important'>{{ __('general.plan') }}</th><th class='fs-13' style='padding:5px; !important'>{{ __('general.price') }}</th></tr></thead>";
                html += "<tbody><tr><td class='fs-13' style='padding:5px; !important' >" + name + "</td><td class='fs-13' style='padding:5px; !important'>" + price + " {{ \App\Services\GeneralService::get_default_currency() }}</td></tr></tbody></table>";
                Swal.fire({
                    title: 'Apply Subscription',
                    html: html + `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}{!!  Html::decode(Form::label('customer_id' ,__('general.customer').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('customer_id',\App\Services\PersonService::pluck_customers(),null,['class'=>'form-control','id'=>'customer_id','placeholder'=>'Select Customer']) }}`,
                    confirmButtonText: 'Next',
                    focusConfirm: false,
                    preConfirm: () => {
                        const payment_type = Swal.getPopup().querySelector('#payment_type').value
                        const customer_id = Swal.getPopup().querySelector('#customer_id').value
                        if (!payment_type) {
                            Swal.showValidationMessage(`First Choose Payment Type`)
                        }
                        if (!customer_id) {
                            Swal.showValidationMessage(`First Choose Customer`)
                        }
                        return {
                            payment_type: payment_type,
                            subscription_id: subscription_id,
                            subscribed_id: customer_id,
                            price: price,
                        }
                    }
                }).then((result) => {
                    let payment_type = result.value.payment_type;
                    let subscription_id = result.value.subscription_id;
                    let subscribed_id = result.value.subscribed_id;
                    let price = result.value.price;
                    if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                        Swal.fire({
                            title: 'Manage Payment',
                            html: `{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}`,
                            confirmButtonText: 'Submit',
                            focusConfirm: false,
                            preConfirm: () => {
                                const transaction_id = Swal.getPopup().querySelector('#transaction_id').value
                                if (!transaction_id) {
                                    Swal.showValidationMessage(`First Enter Transaction ID`)
                                }
                                return {
                                    transaction_id: transaction_id,
                                    payment_type: payment_type,
                                    subscription_id: subscription_id,
                                    subscribed_id: subscribed_id,
                                    price: price,
                                }
                            }
                        }).then((result) => {
                            let payment_type = result.value.payment_type;
                            let subscription_id = result.value.subscription_id;
                            let price = result.value.price;
                            let transaction_id = result.value.transaction_id;
                            Swal.fire({
                                html: '{!! __('general.request_wait') !!}',
                                allowOutsideClick: () => !Swal.isLoading()
                            });
                            Swal.showLoading();
                            let data = {
                                'payment_type': payment_type,
                                'transaction_id': transaction_id,
                                'subscription_id': subscription_id,
                                'subscription_type': '{{ \App\Enum\SubscriptionTypeEnum::PLAN }}',
                                'model_id': model_id,
                                'price': price,
                            }
                            $.ajax({
                                url: "{{ route('dashboard.subscriptions.store') }}",
                                method: 'POST',
                                data: data,
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
                        Swal.fire(
                            'Pending!',
                            'This will be don later!',
                            'pending'
                        )
                    }
                });
            });
        }

        function show_floor_offices(cElement, id) {
            let value = $(cElement).val();
            if (value === '') {
                $.toast({
                    heading: 'Alert',
                    icon: 'danger',
                    text: 'First Choose Office',
                    position: 'top-right',
                    hideAfter: false,
                    bgColor: '#FF1356',
                    textColor: 'white'
                });
                $(cElement).closest('td').find('.offices_holder').empty();
            } else {
                let table = '<table class="table table-bordered mt-2"><thead><tr><th class="fs-13">{{__('general.name')}}</th><th class="fs-13">{{__('general.type')}}</th><th class="fs-13">{{ __('general.sitting_capacity') }}</th></thead><tbody>';
                for (let i = 0; i < value; i++) {
                    table += '<tr><td><input class="form-control form-control-sm" required="" name="floor[' + id + '][offices][name][]" type="text"></td><td><select  class="form-control form-control-sm" required="" name="floor[' + id + '][offices][type][]"><option selected="selected" value="">{{ trans('general.select') }}</option>@foreach(\App\Services\OfficeService::office_types_dropdown() as $type_id=>$type_name) <option value="{{ $type_id }}">{{ $type_name }}</option>  @endforeach</select></td><td><select class="form-control form-control-sm" required="" name="floor[' + id + '][offices][capacity][]"><option selected="selected" value="">__Select__</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option></select></td></tr>';
                }
                table += "</tbody></table>";
                $(cElement).closest('td').find('.offices_holder').empty().html(table);
            }
        }

        $("#no_of_floors").on('change', function () {
            let value = $(this).val();
            let floor_holder = $("#floor_holder");
            if (value === '') {
                $.toast({
                    heading: 'Alert',
                    icon: 'danger',
                    text: 'First Choose No Of Floors',
                    position: 'top-right',
                    hideAfter: false,
                    bgColor: '#FF1356',
                    textColor: 'white'
                });
                floor_holder.hide().find('.card-body').empty();
            } else {
                let table = '<table class="table table-bordered"><thead><tr><th>{{__('general.name')}}</th><th>{{__('general.type')}}</th><th>{{__('general.offices')}}</th></tr></thead><tbody>';
                for (let i = 0; i < value; i++) {
                    table += '<tr><td><input class="form-control form-control-sm" required="" name="floor[name][' + i + ']" type="text"></td><td><select class="form-control form-control-sm" required name="floor[type][' + i + ']"><option selected="selected" value="">{{ trans('general.select') }}</option>@foreach(\App\Services\FloorService::floor_types() as $floor_id=>$floor_name) <option value="{{ $floor_id }}">{{ $floor_name }}</option>  @endforeach</td><td><select onchange="show_floor_offices(this,' + i + ');" class="form-control form-control-sm" required="" name="floor[no_of_offices][' + i + ']"><option selected="selected" value="">{{ trans('general.select') }}</option>@foreach(\App\Services\FloorService::no_of_offices_dropdown() as $office) <option value="{{ $office }}">{{ $office }}</option>  @endforeach</select><div class="offices_holder"></td></tr>';
                }
                table += "</tbody></table>";
                floor_holder.show().find('.card-body').empty().html(table);
            }
        });
        $("#building_id").on('change', function () {
            let holder = $("#floor_id");
            let value = $(this).val();
            if (value === '') {
                $.toast({
                    heading: 'Alert',
                    icon: 'danger',
                    text: 'First Choose building',
                    position: 'top-right',
                    hideAfter: false,
                    bgColor: '#FF1356',
                    textColor: 'white'
                });
                holder.empty();
            } else {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('api.building.floors') }}",
                    data: {
                        'building_id': value,
                    },
                    success: function (data) {
                        holder.empty().html(data);
                    }
                });
            }
        });
        $(function () {
            $('.select2').select2();
            initDropify();
            @if(isset($for))
            calculateArea();
            @endif
        });

        let doc = 1;
        let img = 1;
        function addDocumentField() {
            doc++;
            let objTo = document.getElementById('documents')
            let divDoc = document.createElement("div");
            divDoc.setAttribute("class", "mb-3 doc-remove-class" + doc);
            divDoc.innerHTML = '<div class="row">' +
                '<div class="col-sm-10">' +
                '<input type="file" class="form-control dropify" name="documents[]" data-height="75" data-allowed-file-extensions="doc docx pdf">' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button class="btn btn-danger" type="button" onclick="removeDocumentField(' + doc + ');"> <i class="bx  bx-trash"></i> </button>' +
                '</div>' +
                '</div><div class="clear"></div>';

            objTo.appendChild(divDoc)
            initDropify();
        }
        function removeDocumentField(rid) {
            $('.doc-remove-class' + rid).remove();
        }
        function addImageField() {
            img++;
            let objTo = document.getElementById('images')
            let divDoc = document.createElement("div");
            divDoc.setAttribute("class", "mb-3 img-remove-class" + img);
            divDoc.innerHTML = '<div class="row">' +
                '<div class="col-sm-10">' +
                '<input type="file" class="form-control dropify" name="images[]" data-height="75" data-allowed-file-extensions="jpg jpeg png bmp">' +
                '</div>' +
                '<div class="col-sm-2">' +
                '<button class="btn btn-danger" type="button" onclick="removeImageField(' + img + ');"> <i class="bx  bx-trash"></i> </button>' +
                '</div>' +
                '</div><div class="clear"></div>';

            objTo.appendChild(divDoc)
            initDropify();
        }
        function removeImageField(rid) {
            $('.img-remove-class' + rid).remove();
        }

        $("#furnished").on('click', function () {
            if ($(this).is(":checked")) {
                $("#furnished_details").show();
            } else {
                $("#furnished_details").hide();
            }
        });

        function clone_row(cElement) {
            let clone = $(cElement).closest('tr').clone();
            $(clone).find('input[type=text]').val('');
            $(clone).find('input[type=number]').val('');
            $(clone).find('input[type=hidden]').val('');
            $(clone).find('.hr-pic').attr('src', "{{ url('theme/images/user-picture.png') }}");
            $(cElement).closest('tbody').append(clone);
        }

        function remove_clone_row(cElement) {
            let length = $(cElement).closest('tbody').find('tr').length;
            if (length > 1) {
                $(cElement).closest('tr').remove();
            } else {
                alert("At least one row is Required")
            }
        }

        function calculateArea() {
            let width = Number($('#width').val());
            let tempWidth;
            if (isNaN(width)) {
                width = 0;
            }
            if (width > 0) {
                let splitWidth = width.toString().split('.');
                if (splitWidth.length > 1) {
                    tempWidth = (Number(splitWidth[0]) + (Number(splitWidth[1]) / 12));
                } else {
                    tempWidth = width;
                }
            } else {
                tempWidth = 0;
            }


            let length = Number($('#length').val());
            let tempLength;

            if (isNaN(length)) {
                length = 0;
            }
            if (length > 0) {
                let splitLength = length.toString().split('.');
                if (splitLength.length > 1) {
                    tempLength = (Number(splitLength[0]) + (Number(splitLength[1]) / 12));
                } else {
                    tempLength = length;
                }
            } else {
                tempLength = 0;
            }
            let area = (Number(tempWidth) * Number(tempLength));
            $('#area').val(area);
        }
    </script>
@endsection
