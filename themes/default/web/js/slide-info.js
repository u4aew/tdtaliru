$(window).scroll(function () {

    if (window.scrollY > 105) {
        $(".navigation").addClass("navigation-fixed").css('top', 0);
    } else {
        $(".navigation").removeClass("navigation-fixed").css('top', 0);
    }
    ;
})
$(document).ready(
    function () {
        if ($(window).height() > '800') {

            $(window).scroll(function () {

                if (window.scrollY > 105) {
                    $(".menu-sidebar").addClass("menu-sidebar-visible").css('top', -280);
                    $(".hidden-link").css('opacity', 0);
                } else {
                    $(".menu-sidebar").removeClass("menu-sidebar-visible").css('top', 0);
                    $(".hidden-link").css('opacity', 1);
                }
                ;
            })
        }
        else {

        }
    }
)