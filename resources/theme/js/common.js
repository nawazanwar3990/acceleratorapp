(function (){
    $('.select2').select2();
    $('.dropify').dropify();
    $('.timepicker').timepicker();
    $(function () {
        $(".preloader").fadeOut()
    }), jQuery(document).on("click", ".mega-dropdown", function (e) {
        e.stopPropagation()
    });
    function e() {
        (0 < window.innerWidth ? window.innerWidth : this.screen.width) < 1170 ? ($("body").addClass("mini-sidebar"), $(".navbar-brand span").hide(), $(".sidebartoggler i").addClass("ti-menu")) : ($("body").removeClass("mini-sidebar"), $(".navbar-brand span").show());
        let e = (0 < window.innerHeight ? window.innerHeight : this.screen.height) - 1;
        (e -= 55) < 1 && (e = 1), 55 < e && $(".page-wrapper").css("min-height", e + "px")
    }

    $(window).ready(e), $(window).on("resize", e), $(".sidebartoggler").on("click", function () {
        $("body").hasClass("mini-sidebar") ? ($("body").trigger("resize"), $("body").removeClass("mini-sidebar"), $(".navbar-brand span").show()) : ($("body").trigger("resize"), $("body").addClass("mini-sidebar"), $(".navbar-brand span").hide())
    }), $(".nav-toggler").click(function () {
        $("body").toggleClass("show-sidebar"), $(".nav-toggler i").toggleClass("ti-menu"), $(".nav-toggler i").addClass("ti-close")
    }), $(".search-box a, .search-box .app-search .srh-btn").on("click", function () {
        $(".app-search").toggle(200)
    }), $(".right-side-toggle").click(function () {
        $(".right-sidebar").slideDown(50), $(".right-sidebar").toggleClass("shw-rside")
    }), $(".floating-labels .form-control").on("focus blur", function (e) {
        $(this).parents(".form-group").toggleClass("focused", "focus" === e.type || 0 < this.value.length)
    }).trigger("blur"), $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    }), $(function () {
        $('[data-toggle="popover"]').popover()
    }), $(".scroll-sidebar, .right-side-panel, .message-center, .right-sidebar").perfectScrollbar(), $("#chat, #msg, #comment, #todo").perfectScrollbar(), $("body").trigger("resize"), $(".list-task li label").click(function () {
        $(this).toggleClass("task-done")
    }), $('a[data-action="collapse"]').on("click", function (e) {
        e.preventDefault(), $(this).closest(".card").find('[data-action="collapse"] i').toggleClass("ti-minus ti-plus"), $(this).closest(".card").children(".card-body").collapse("toggle")
    }), $('a[data-action="expand"]').on("click", function (e) {
        e.preventDefault(), $(this).closest(".card").find('[data-action="expand"] i').toggleClass("mdi-arrow-expand mdi-arrow-compress"), $(this).closest(".card").toggleClass("card-fullscreen")
    }), $('a[data-action="close"]').on("click", function () {
        $(this).closest(".card").removeClass().slideUp("fast")
    });
    let i,
        a = [
            "skin-default",
            "skin-green",
            "skin-red",
            "skin-blue",
            "skin-purple",
            "skin-megna",
            "skin-default-dark",
            "skin-green-dark",
            "skin-red-dark",
            "skin-blue-dark",
            "skin-purple-dark",
            "skin-megna-dark"
        ];

    function s(e) {
        return $.each(a, function (e) {
            $("body").removeClass(a[e])
        }), $("body").addClass(e), function (e, i) {
            "undefined" != typeof Storage ? localStorage.setItem(e, i) : window.alert("Please use a modern browser to properly view this template!")
        }("skin", e), !1
    }

    (i = function (e) {
        if ("undefined" != typeof Storage) return localStorage.getItem(e);
        window.alert("Please use a modern browser to properly view this template!")
    }("skin")) && $.inArray(i, a) && s(i), $("[data-skin]").on("click", function (e) {
        $(this).hasClass("knob") || (e.preventDefault(), s($(this).data("skin")))
    }), $("#themecolors").on("click", "a", function () {
        $("#themecolors li a").removeClass("working"), $(this).addClass("working")
    }), $(".custom-file-input").on("change", function () {
        const e = $(this).val();
        $(this).next(".custom-file-label").html(e)
    });

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
})();
function manageOtherServices(cElement){
 let value = $(cElement).val();
 console.log(value);
}
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

    if (value === 'physical' || value === 'remote' || value === 'online') {

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
                location.assign('/mentors/create/step1');
                break;
            case 'freelancer':
                location.assign('/freelancers/create');
                break;
        }
    });
    return false;
}
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
function clone_row(cElement) {
    let clone = $(cElement).closest('tr').clone();
    $(clone).find('input[type=text]').val('');
    $(clone).find('input[type=number]').val('');
    $(clone).find('input[type=hidden]').val('');
    $(clone).find('.hr-pic').attr('src', "{{ url('images/user-picture.png') }}");
    $(cElement).closest('tbody').append(clone);
}

function remove_clone_row(cElement) {
    let length = $(cElement).closest('tbody').find('tr').length;
    if (length > 1) {
        $(cElement).closest('tr').remove();
    } else {
        alert("At least one row is Required");
    }
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
function showError(errorMsg) {
    $.toast({
        heading: "Error",
        text: errorMsg,
        position: 'top-right',
        icon: 'error',
        hideAfter: 3000,
        stack: 6
    });
}
function showMessage(message) {
    $.toast({
        heading: "Success",
        text: message,
        position: 'top-right',
        icon: 'success',
        hideAfter: 3000,
        stack: 6
    });
}