$(function () {
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
    })
});

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
        alert("At least one row is Required")
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
