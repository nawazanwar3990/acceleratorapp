function clone_dropify(cElement) {
    let closest_holder = $(cElement).closest('.dropify_parent_holder');
    let html = '<div class="py-3 px-1 position-relative dropify_parent_holder">\n' +
        '            <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">\n' +
        '                <i class="bx bx-plus"></i>\n' +
        '            </a>\n' +
        '            <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">\n' +
        '                <i class="bx bx-trash"></i>\n' +
        '            </a>\n' +
        '            <input class="dropify" data-height="75" data-allowed-file-extensions="jpg jpeg png bmp" name="images[]" type="file">\n' +
        '        </div>';
    closest_holder.after(html);
    $(".dropify").dropify();
}

function remove_clone_dropify(cElement) {
    let closest_holder = $(cElement).closest('.dropify_parent_holder');
    closest_holder.remove();
}

function clone_table_body(cElement) {
    let clone = $(cElement).closest('tbody').clone();
    $(clone).find('input[type=text]').val('');
    $(clone).find('input[type=number]').val('');
    $(clone).find('input[type=hidden]').val('');
    $(clone).find('input[type=file]').removeAttr();
    $(cElement).closest('table').append(clone);
    $(clone).find('input[type=file]').dropify();
}

function remove_table_body(cElement) {
    let length = $(cElement).closest('table').find('tbody').length;
    if (length > 1) {
        $(cElement).closest('tbody').remove();
    } else {
        alert("At least one Body is Required");
    }
}
