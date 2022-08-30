function apply_registration(types) {
    types = JSON.parse(types);
    let html = '<div class="row justify-content-center">';
    $.each(types, function (index, value) {
        let checked = (index === 'business_accelerator') ? 'checked' : '';
        html += '<div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-3 copl-xxl-3">' + ' <div class="card border position-relative">' + '<div class="radio-holder position-absolute" style="right:0;top:9px;"> <div class="form-check form-switch">' + '<input class="form-check-input" name="register_type" type="radio" id=' + index + ' value=' + index + ' ' + checked + '>' + ' <label class="form-check-label" for=' + index + '></label>' + ' </div></div>' + '<img class="card-img-top p-5 pb-0" src="/images/icon/' + index + '.png" alt="Card image cap">' + '<div class="card-body" style="height: 73px;">' + '<h6 class="card-title">' + value + '</h6>' + ' </div>' + '</div>' + '</div>';
    });
    html += '</div>';
    Swal.fire({
        title: 'User Registration Type',
        html: html,
        width: 900,
        confirmButtonText: 'Next',
        customClass: {
            confirmButton: 'button button-cta btn-align rounded raised primary-btn'
        },
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
        Swal.showLoading();
        switch (regType) {
            case 'business_accelerator':
                choose_register_type('ba');
                break;
            case 'customer':
                location.assign('/customers/create');
                break;
            case 'mentor':
                apply_payment('mentors');
                break;
            case 'freelancer':
                choose_register_type('freelancers');
                break;
        }
    });
    return false;
}

function choose_register_type(parent) {
    let html = '<div class="row justify-content-center">\n' +
        '  <div class="col-lg-6 col-md-6"> \n' +
        '    <div class="card border position-relative"> \n' +
        '      <div class="radio-holder position-absolute" style="right:0;top:9px;"> \n' +
        '        <div class="form-check form-switch">\n' +
        '          <input id="company" class="form-check-input" required="" checked="checked" name="type" type="radio" value="company"> \n' +
        '          <label class="form-check-label" for="company">\n' +
        '          </label> \n' +
        '        </div> \n' +
        '      </div> \n' +
        '      <img class="p-5 pb-0" src="/images/icon/comp.png" alt="Company"> \n' +
        '      <div class="card-body text-center"> \n' +
        '        <h5 class="card-title">Company\n' +
        '        </h5> \n' +
        '        <ul class="pl-3" style="text-align: left;padding-left: 9px;">\n' +
        '          <li class="fs-13" style="">If you are group of peoples\n' +
        '          </li>\n' +
        '          <li class="fs-13">If you are working as a company\n' +
        '          </li>\n' +
        '        </ul>\n' +
        '      </div> \n' +
        '    </div> \n' +
        '  </div>\n' +
        '  <div class="col-lg-6 col-md-6"> \n' +
        '    <div class="card border position-relative"> \n' +
        '      <div class="radio-holder position-absolute" style="right:0;top:9px;"> \n' +
        '        <div class="form-check form-switch">\n' +
        '          <input id="individual" class="form-check-input" required="" name="type" type="radio" value="individual"> \n' +
        '          <label class="form-check-label" for="individual">\n' +
        '          </label> \n' +
        '        </div> \n' +
        '      </div> \n' +
        '      <img class="p-5 pb-0" src="/images/icon/indiv.png" alt="Individual"> \n' +
        '      <div class="card-body text-center"> \n' +
        '        <h5 class="card-title">Individual\n' +
        '        </h5> \n' +
        '        <ul class="pl-3" style="text-align: left;padding-left: 9px;">\n' +
        '          <li class="fs-13">If you are an individual\n' +
        '          </li>\n' +
        '          <li class="fs-13">If you are one member company\n' +
        '          </li>\n' +
        '        </ul>\n' +
        '      </div> \n' +
        '    </div> \n' +
        '  </div>\n' +
        '</div>\n';
    Swal.fire({
        title: (parent === 'ba') ? 'Business Accelerator Types' : 'Freelancer Types',
        html: html,
        confirmButtonText: 'Next',
        focusConfirm: false,
        customClass: {
            confirmButton: 'button button-cta btn-align rounded raised primary-btn'
        },
        preConfirm: () => {
            const type = Swal.getPopup().querySelector("input[name=type]:checked").value;
            return {
                type: type,
                parent: parent
            }
        }
    }).then((result) => {
        let type = result.value.type;
        let parent = result.value.parent;
        apply_payment(parent, type);
    });
}

function apply_payment(parent = null, type) {
    let html = '<div class="row justify-content-center">\n' +
        '  <div class="col-lg-6 col-md-6"> \n' +
        '    <div class="card border position-relative"> \n' +
        '      <div class="radio-holder position-absolute" style="right:0;top:9px;"> \n' +
        '        <div class="form-check form-switch">\n' +
        '          <input id="pre-payment" class="form-check-input" required="" name="payment_type" type="radio" value="pre-payment"> \n' +
        '          <label class="form-check-label" for="pre-payment">\n' +
        '          </label> \n' +
        '        </div> \n' +
        '      </div> \n' +
        '      <img class="p-5 pb-0" src="/images/icon/preapply.png" alt="Pre Apply"> \n' +
        '      <div class="card-body text-center"> \n' +
        '        <h5 class="card-title">Customized Plan\n' +
        '        </h5> \n' +
        '        <ul class="pl-3" style="text-align: left;padding-left: 9px;">\n' +
        '          <li class="fs-13">Select services according to your need.\n' +
        '          </li>\n' +
        '          <li class="fs-13">You can select package after admin package creation on the basis of your selected services.\n' +
        '          </li>\n' +
        '        </ul>\n' +
        '      </div> \n' +
        '    </div> \n' +
        '  </div>\n' +
        '  <div class="col-lg-6 col-md-6"> \n' +
        '    <div class="card border position-relative"> \n' +
        '      <div class="radio-holder position-absolute" style="right:0;top:9px;"> \n' +
        '        <div class="form-check form-switch">\n' +
        '          <input id="direct-payment" class="form-check-input" required="" checked="checked" name="payment_type" type="radio" value="direct-payment"> \n' +
        '          <label class="form-check-label" for="direct">\n' +
        '          </label> \n' +
        '        </div> \n' +
        '      </div> \n' +
        '      <img class="p-5 pb-0" src="/images/icon/directapply.png" alt="Direct Apply"> \n' +
        '      <div class="card-body text-center"> \n' +
        '        <h5 class="card-title">Predefined Plan\n' +
        '        </h5> \n' +
        '        <ul class="pl-3" style="text-align: left;padding-left: 9px;">\n' +
        '          <li class="fs-13 mb-3">Already defined services.\n' +
        '          </li>\n' +
        '          <li class="fs-13" style="margin-bottom: 2.6rem;">You can select package (Already defined by admin).\n' +
        '          </li>\n' +
        '        </ul>\n' +
        '      </div> \n' +
        '    </div> \n' +
        '  </div>\n' +
        '</div>\n';
    Swal.fire({
        title: 'Payment Process',
        html: html,
        confirmButtonText: 'Next',
        focusConfirm: false,
        customClass: {
            confirmButton: 'button button-cta btn-align rounded raised primary-btn'
        },
        preConfirm: () => {
            const payment_type = Swal.getPopup().querySelector("input[name=payment_type]:checked").value;
            return {
                parent: parent,
                type: type,
                payment_type: payment_type
            }
        }
    }).then((result) => {
        let parent = result.value.parent;
        let type = result.value.type;
        let payment_type = result.value.payment_type;
        if (parent === 'ba' || parent === 'freelancers') {
            let route = '/' + parent + '/create/' + type + "/" + payment_type + "/user-info";
            location.assign(route);
        } else {
            let route = '/' + parent + '/create/' + payment_type + "/user-info";
            location.assign(route);
        }
    });
}

function printMe(id, route) {
    $('#' + id).printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: false,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: ['/css/website.min.css'],                // path to additional css file - use an array [] for multiple
        pageTitle: "",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: null,               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '...',       // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null, beforePrint: function () {
            $(".ignore_printing").remove();
        }, afterPrint: function () {
            location.assign(route);
        }
    });
}

(function () {
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
        a = ["skin-default", "skin-green", "skin-red", "skin-blue", "skin-purple", "skin-megna", "skin-default-dark", "skin-green-dark", "skin-red-dark", "skin-blue-dark", "skin-purple-dark", "skin-megna-dark"];

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

function manageOtherServices(cElement) {
    let holder = $("#other_services_holder");
    let html = '<tr>\n' + '                            <th class="py-2">\n' + '                                <input id="other_services[]" class="form-control form-control-sm" name="other_services[]" type="text">\n' + '                            </th>\n' + '                            <td class="text-center pt-2">\n' + '                                <a href="javascript:void(0);" onclick="clone_row(this);" class="btn btn-xs btn-info">\n' + '                                    <i class="bx bx-plus"></i>\n' + '                                </a>\n' + '                                <a href="javascript:void(0);" tabindex="18" onclick="remove_clone_row(this);" class="btn btn-xs btn-danger">\n' + '                                    <i class="bx bx-minus"></i>\n' + '                                </a>\n' + '                            </td>\n' + '                        </tr>';
    holder.removeClass('d-block d-none');
    if ($(cElement).prop("checked") === true) {
        holder.addClass('d-block');
        holder.find('table').append(html);
    } else {
        holder.addClass('d-none');
    }
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

function clone_dropify(cElement) {
    let closest_holder = $(cElement).closest('.dropify_parent_holder');
    let html = '<div class="py-3 px-1 position-relative dropify_parent_holder">\n' + '            <a onclick="clone_dropify(this);" class="position-absolute dropify-add-clone-btn">\n' + '                <i class="bx bx-plus"></i>\n' + '            </a>\n' + '            <a onclick="remove_clone_dropify(this);" class="position-absolute dropify-remove-clone-btn">\n' + '                <i class="bx bx-trash"></i>\n' + '            </a>\n' + '            <input class="dropify" data-height="75" data-allowed-file-extensions="jpg jpeg png bmp" name="images[]" type="file">\n' + '        </div>';
    closest_holder.after(html);
    $(".dropify").dropify();
}

function clone_row(cElement) {
    let clone = $(cElement).closest('tr').clone();
    $(clone).find('input[type=text]').val('');
    clone.find('.view_image').empty();
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
        heading: "Error", text: errorMsg, position: 'top-right', icon: 'error', hideAfter: 3000, stack: 6
    });
}

function showMessage(message) {
    $.toast({
        heading: "Success", text: message, position: 'top-right', icon: 'success', hideAfter: 3000, stack: 6
    });
}
