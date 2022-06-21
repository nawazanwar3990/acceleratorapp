/*
Template Name: Admin Template
Author: Wrappixel

File: js
*/
// ==============================================================
// Auto select left navbar
// ==============================================================
$(function () {
    let url ;
    let tempUrl = window.location.href.split('?');
    let splitUrl = tempUrl[0].split('/');
    if (splitUrl[splitUrl.length -1] == 'create') {
        url = tempUrl[0].slice(0, (tempUrl[0].length - 7));
    } else {
        url = tempUrl[0];
    }

    let element = $('ul#sidebarnav a').filter(function () {
        return this.href == url;
    }).addClass('active').parent().addClass('active');
    while (true) {
        if (element.is('li')) {
        // element = element.parent().addClass('in').parent().addClass('active').children('a').addClass('active');
            element = element.parent().addClass('in').parent().children('a').addClass('active').parent().parent().addClass('in').parent().addClass('active').children('a').addClass('active');
        }
        else {
            break;
        }
    }
    $('#sidebarnav a').on('click', function (e) {

            if (!$(this).hasClass("active")) {
                // hide any open menus and remove all other classes
                $("ul", $(this).parents("ul:first")).removeClass("in");
                $("a", $(this).parents("ul:first")).removeClass("active");

                // open our new menu and add the open class
                $(this).next("ul").addClass("in");
                $(this).addClass("active");

            }
            else if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).parents("ul:first").removeClass("active");
                $(this).next("ul").removeClass("in");
            }
    })
    $('#sidebarnav >li >a.has-arrow').on('click', function (e) {
        e.preventDefault();
    });
});
