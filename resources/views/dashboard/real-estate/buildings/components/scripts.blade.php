@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
@endsection
@section('innerScript')
    @include('dashboard.real-estate.common.hr-picker-script')
    <script>
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
                '<button class="btn btn-danger" type="button" onclick="removeDocumentField(' + doc + ');"> <i class="fa fa-minus"></i> </button>' +
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
                '<button class="btn btn-danger" type="button" onclick="removeImageField(' + img + ');"> <i class="fa fa-minus"></i> </button>' +
                '</div>' +
                '</div><div class="clear"></div>';

            objTo.appendChild(divDoc)
            initDropify();
        }

        function removeImageField(rid) {
            $('.img-remove-class' + rid).remove();
        }

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
                    tempWidth = ( Number(splitWidth[0]) + (Number(splitWidth[1]) /12 ) );
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
                    tempLength = ( Number(splitLength[0]) + (Number(splitLength[1]) /12 ) );
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
