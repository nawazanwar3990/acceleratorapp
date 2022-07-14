@section('inner-script-files')
@endsection
@section('innerScript')
    <script>

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
