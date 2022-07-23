"use strict";
$(function () {
    $(document).on("change", "#is_register_company", function () {
        let institute_holder = $("#institute_holder");
        let value = $(this).find('option:selected').val();
        institute_holder.removeClass('d-block d-none');
        if (value === 'yes') {
            institute_holder.addClass('d-block');
        } else {
            institute_holder.addClass('d-none');
        }
    });
});
function applyLogin(types) {
    types = JSON.parse(types);
    let html = '<div class="row justify-content-center">';
    $.each(types, function (index, value) {
        let checked = (index === 'business_accelerator') ? 'checked' : '';
        html += '<div class="col-lg-3 col-md-6">' +
            ' <div class="card border position-relative">' +
            '<div class="radio-holder position-absolute" style="right:0;top:9px;"> <div class="form-check form-switch">' +
            '<input class="form-check-input" name="register_type" type="radio" id=' + index + ' value=' + index + ' ' + checked + '>' +
            ' <label class="form-check-label" for=' + index + '></label>' +
            ' </div></div>' +
            '<img class="card-img-top p-5 pb-0" src="/images/icon/' + index + '.png" alt="Card image cap">' +
            '<div class="card-body">' +
            '<h6 class="card-title">' + value + '</h6>' +
            ' </div>' +
            '</div>' +
            '</div>';
    });
    html += '</div>';
    Swal.fire({
        title: 'Registration Type',
        html: html,
        width: 900,
        confirmButtonText: 'Next',
        focusConfirm: false,
        preConfirm: () => {
            const register_type = Swal.getPopup().querySelector("input[name=register_type]:checked").value;
            if (!register_type) {
                Swal.showValidationMessage(`First Choose Register Type`)
            }
            return {
                register_type: register_type
            }
        }
    }).then((result) => {
        let register_type = result.value.register_type;
        switch (register_type) {
            case 'business_accelerator':
                location.assign('/ba/create/step1')
                break;
            case 'customer':
                break;
            case 'mentor':
                break;
        }
    });
    return false;
}
function cloneRow(cElement) {
    let clone = $(cElement).closest('tr').clone();
    $(clone).find('input[type=text]').val('');
    $(clone).find('input[type=number]').val('');
    $(clone).find('input[type=hidden]').val('');
    $(clone).find('.hr-pic').attr('src', "{{ url('images/user-picture.png') }}");
    $(cElement).closest('tbody').append(clone);
}

function removeClonedRow(cElement) {
    let length = $(cElement).closest('tbody').find('tr').length;
    if (length > 1) {
        $(cElement).closest('tr').remove();
    } else {
        alert("At least one row is Required");
    }
}
