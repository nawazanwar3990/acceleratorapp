@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('dashboard.common.hr-picker-script')
    <script>
         $(function () {
            $('.select2').select2();
        });

        function mapFlat(id, type) {
        let value = $("#" + id).val();
        showWait();
        $.ajax({
        url: "{{ route('dashboard.get.flat-object')}}",
        type: 'POST',
        data: {'id':value},
        success:function(response) {
            hideWait();
            if (response.status === false) {
                toastr.error('No FLat Found with this Id')
            } else {
                $("." + type + "_name").val(response.flat_name);
                $("." + type + "_number").val(response.flat_number);
                $("." + type + "_type_id").val(response.flat_type_id);
                $("." + type + "_status").val(response.status);
                $("." + type + "_facing").val(response.facing);
                $("." + type + "_area").val(response.area);
                $("." + type + "_view").val(response.view);
                }
            }
        });
        }

        $(function () {
            initDropify();
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
                '<button class="btn btn-danger" type="button" onclick="removeDocumentField(' + doc + ');"> <i class="fa fa-minus"></i> </button>' +
                '</div>' +
                '</div><div class="clear"></div>';

            objTo.appendChild(divDoc)
            initDropify();
        }

        function removeDocumentField(rid) {
            $('.doc-remove-class' + rid).remove();
        }

        function manageYesNoStatus(currentElement, container) {
            let element = $("." + container + "_holder");
            element.removeClass('h-force-flex d-force-flex');
            let selected_value = $(currentElement).find('option:selected').val();
            if (selected_value === 'no' || selected_value === '' ) {
                element.addClass('h-force-flex');
            } else {
                element.addClass('d-force-flex');
            }
        }
    </script>
@endsection
