function clone_dropify(cElement) {
    let closest_holder = $(cElement).closest('.dropify_parent_holder');
    let clone = closest_holder.clone();
    closest_holder.after(clone);
    $('.dropify').dropify();
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
    $(clone).find('.hr-pic').attr('src', "{{ url('images/user-picture.png') }}");
    $(cElement).closest('table').append(clone);
}

function remove_table_body(cElement) {
    let length = $(cElement).closest('table').find('tbody').length;
    if (length > 1) {
        $(cElement).closest('tbody').remove();
    } else {
        alert("At least one Body is Required");
    }
}
