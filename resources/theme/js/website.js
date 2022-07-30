"use strict";
$(function () {
    $('.dropify').dropify();
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

function already_employee(cElement) {
    let employee_detail_holder = $("#employee_detail_holder");
    let employee_type_holder = $("#employee_type_holder");
    let value = $(cElement).find('option:selected').val();
    employee_detail_holder.removeClass('d-block d-none');
    if (value === 'yes') {
        employee_detail_holder.addClass('d-block');
    } else {
        employee_type_holder.removeClass('d-block d-none');
        employee_detail_holder.addClass('d-none');
        employee_type_holder.addClass('d-none');
        $("input[name=f_emp_type]").prop("checked", false);
    }
}
function change_emp_type(cElement) {

    let employee_type_holder = $("#employee_type_holder");
    let value = $(cElement).val();

    employee_type_holder.removeClass('d-block d-none');

    if (value==='physical' || value==='remote' || value==='online') {

        employee_type_holder.addClass('d-block');

    } else {

        employee_type_holder.addClass('d-none');

    }
}
function applyLogin(types) {
    types = JSON.parse(types);
    let html = '<div class="row justify-content-center">';
    $.each(types, function (index, value) {
        let checked = (index === 'business_accelerator') ? 'checked' : '';
        html += '<div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-3 copl-xxl-3">' +
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
        let regType = result.value.register_type;
        Swal.fire({
            html: 'Processing...',
            allowOutsideClick: () => !Swal.isLoading()
        });
        Swal.showLoading();
        switch (regType) {
            case 'business_accelerator':
                location.assign('/ba/create');
                break;
            case 'customer':
                location.assign('/customers/create');
                break;
            case 'mentor':
                location.assign('/mentors/create');
                break;
            case 'freelancer':
                location.assign('/freelancers/create');
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
