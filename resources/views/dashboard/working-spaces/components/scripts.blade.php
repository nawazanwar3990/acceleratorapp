@section('inner-script-files')
@endsection
@section('innerScript')
    <script>
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
                let table = '<table class="table table-bordered mt-2"><thead><tr><th class="fs-13">{{__('general.name')}}</th><th class="fs-13">{{__('general.number')}}</th><th class="fs-13">{{ __('general.sitting_capacity') }}</th><th class="fs-13">{{__('general.plans')}}</th></thead><tbody>';
                for (let i = 0; i < value; i++) {
                    table += '<tr><td><input class="form-control form-control-sm" required="" name="floor[' + id + '][offices][name][]" type="text"></td><td><input  class="form-control form-control-sm" required="" name="floor[' + id + '][offices][number][]" type="text"></td><td><select class="form-control form-control-sm" required="" name="floor[' + id + '][offices][capacity][]"><option selected="selected" value="">__Select__</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option></select></td><td><select name="floor[' + id + '][offices][plan][]" class="form-control form-control-sm" required><option value="" selected="selected">{{  __('general.select') }}</option>@foreach(\App\Services\PlanService::listPlans() as $plan) <option value="{{ $plan->id }}">{{ $plan->name }}</option> @endforeach</select></td></tr>';
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
                let table = '<table class="table table-bordered"><thead><tr><th>{{__('general.name')}}</th><th>{{__('general.number')}}</th><th>{{__('general.offices')}}</th></tr></thead><tbody>';
                for (let i = 0; i < value; i++) {
                    table += '<tr><td><input class="form-control form-control-sm" required="" name="floor[name][' + i + ']" type="text"></td><td><input  class="form-control form-control-sm" required="" name="floor[number][' + i + ']" type="text"></td><td><select onchange="show_floor_offices(this,' + i + ');" class="form-control form-control-sm" required="" name="floor[no_of_offices][' + i + ']"><option selected="selected" value="">__Select__</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option></select><div class="offices_holder"></td></tr>';
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

        function cloneRow(cElement) {
            let clone = $(cElement).closest('tr').clone();
            $(clone).find('input[type=text]').val('');
            $(clone).find('input[type=number]').val('');
            $(clone).find('input[type=hidden]').val('');
            $(clone).find('.hr-pic').attr('src', "{{ url('theme/images/user-picture.png') }}");
            $(cElement).closest('tbody').append(clone);
        }

        function removeClonedRow(cElement) {
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
