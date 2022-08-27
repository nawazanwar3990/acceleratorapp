<script
    src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=o23blg9ah1zca8fzz4hpnqndoxanbov1pv288bvw0ptznp19"></script>
@section('innerScript')
    <script>
        let plugins = [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern image imagetools"
        ];
        let templates = [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ];
        let content_css = [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ];

        let toolbar1 = "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image";
        let toolbar2 = "print preview media | forecolor backcolor emoticons";

        function manageCallBack(meta) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            if (meta.filetype === 'image') {
                let uploader = $('#upload');
                uploader.trigger('click');
                uploader.on('change', function () {
                    const file = this.files[0];
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        callback(e.target.result, {
                            alt: ''
                        });
                    };
                    reader.readAsDataURL(file);
                });
            }
        }

        callTiny('section_tiny');

        function callTiny(tiny_selector) {
            tinymce.init({
                selector: '.' + tiny_selector,
                extended_valid_elements: 'i[class]',
                theme: 'modern',
                plugins: plugins,
                toolbar1: toolbar1,
                entity_encoding: "raw",
                toolbar2: toolbar2,
                image_advtab: true,
                relative_urls: false,
                remove_script_host: false,
                images_upload_url: '/dash/sections/upload',
                images_upload_base_path: '/uploads/sections',
                image_caption: true,
                extended_valid_elements: "*[*]",
                file_picker_callback: function (callback, value, meta) {
                    manageCallBack(meta);
                },
                templates: templates,
                content_css: content_css
            });
        }

        function clone_section_tiny(cElement) {
            let existing_order = $(cElement).closest('tbody').find('#order').val();
            existing_order = parseFloat(existing_order) + 1;
            let html = '<tbody><tr>\n' +
                '        <td style="vertical-align: middle">\n' +
                '            <label for="order[]" class="col-form-label">Order</label>\n' +
                '            <input class="form-control" autofocus="" id="order" name="order[]" type="number" value=' + existing_order + '>\n' +
                '        </td>\n' +
                '        <td>\n' +
                '            <label for="html[]" class="col-form-label">Html</label>\n' +
                '            <textarea class="form-control section_tiny" autofocus="" rows="2" name="html[]"></textarea>\n' +
                '        </td>\n' +
                '    </tr>' +
                '<tr>\n' +
                '        <td colspan="2" class="text-center">\n' +
                '            <a href="javascript:void(0);" onclick="clone_section_tiny(this);" class="btn btn-xs btn-info cloneMe">\n' +
                '                <i class="bx bx-plus"></i>\n' +
                '            </a>\n' +
                '            <a href="javascript:void(0);" tabindex="18" onclick="remove_section_tiny(this);" class="btn btn-xs btn-danger">\n' +
                '                <i class="bx bx-minus"></i>\n' +
                '            </a>\n' +
                '        </td>\n' +
                '    </tr></tbody>';
            ;
            $(cElement).closest('table').append(html);
            $(cElement).closest('tbody').find('.cloneMe').hide();
            callTiny('section_tiny');
        }

        function remove_section_tiny(cElement) {
            let length = $(cElement).closest('table').find('tbody').length;
            if (length > 1) {
                $(cElement).closest('tbody').prev('tbody').find('.cloneMe').show();
                $(cElement).closest('tbody').remove();
            } else {
                alert("At least one Body is Required");
            }
        }
    </script>
@endsection
