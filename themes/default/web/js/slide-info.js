setTimeout(function () {
    $(".img-price-reductor").addClass("img-price-reductor-time")
},5000);
setTimeout(function () {
    $(".img-price-reductor").removeClass("img-price-reductor-time")
},6000);
$(document).ready(
    function () {
        if ($(window).height() > '800') {

            $(window).scroll(function () {

                if (window.scrollY > 105) {
                    $(".navigation").addClass("navigation-fixed").css('top', 0);
                    $(".menu-sidebar").addClass("menu-sidebar-visible").css('top', -280);
                    $(".hidden-link").css('opacity', 0);
                } else {
                    $(".menu-sidebar").removeClass("menu-sidebar-visible").css('top', 0);
                    $(".hidden-link").css('opacity', 1);
                    $(".navigation").removeClass("navigation-fixed").css('top', 0);
                }
                ;
            })
        }
        else {

        }
    }
)