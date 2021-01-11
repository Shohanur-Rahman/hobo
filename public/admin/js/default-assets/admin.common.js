$(document).ready(function () {
// :: Variables
    var ecaps_window = $(window);
    var dd = $("dd");
    var pageWrapper = $(".ecaps-page-wrapper");
    var sideMenuArea = $(".ecaps-sidemenu-area");
    var fullScreen = $("body")[0];

    // :: Menu Active Code
    $("#menuCollasped").on("click", function () {
        pageWrapper.toggleClass("menu-collasped-active");
    });

    $("#mobileMenuOpen").on("click", function () {
        pageWrapper.toggleClass("mobile-menu-active");
    });

    $("#rightSideTrigger").on("click", function () {
        $(".right-side-content").toggleClass("active");
    });

    sideMenuArea.on("mouseenter", function () {
        pageWrapper.addClass("sidemenu-hover-active");
        pageWrapper.removeClass("sidemenu-hover-deactive");
    });

    sideMenuArea.on("mouseleave", function () {
        pageWrapper.removeClass("sidemenu-hover-active");
        pageWrapper.addClass("sidemenu-hover-deactive");
    });

    // :: Setting Panel Active Code
    $("#settingTrigger").on("click", function () {
        $(".choose-layout-area").toggleClass("active");
    });

    $("#settingCloseIcon").on("click", function () {
        $(".choose-layout-area").removeClass("active");
    })

    $("#quicksettingTrigger").on("click", function () {
        $(".quick-settings-panel").toggleClass("active");
    });

    $("#quicksettingCloseIcon").on("click", function () {
        $(".quick-settings-panel").removeClass("active");
    })

    // :: Popover Active Code
    if ($.fn.popover) {
        $('[data-toggle="popover"]').popover();
    }

    // :: FooTable Active Code
    if ($.fn.footable) {
        $(".footable").footable();
    }

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: Window Fullscreen Code
    $("#fullScreenMode").on("click", function () {
        if (screenfull.enabled) {
            screenfull.request(fullScreen);
        }
    });

    // :: Dropdown Active Code
    if ($.fn.dropdown) {
        $("dropdown-toggle").dropdown();
    }

    // :: Jarallax Active Code
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.2
        });
    }

    // :: Counterup Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 15,
            time: 2000
        });
    }

    // :: Wow Active Code
    if (ecaps_window.width() > 767) {
        new WOW().init();
    }

    // :: Accordian Active Code
    dd.filter(":nth-child(n+3)").hide();
    $("dl").on("click", "dt", function () {
        $(this).next().slideDown(500).siblings("dd").slideUp(500);
    });

    // :: PreventDefault a Click
    $('a[href="#"]').on("click", function ($) {
        $.preventDefault();
    });

    // :: Tooltip Active Code
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // :: Countdown Active Code
    if ($.fn.countdown) {
        $("#clock").countdown("2021/12/24", function (event) {
            $(this).html(event.strftime("<div>%D <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>"));
        });
    }



    $(".zipcode").keydown(function (event) {

        $(this).attr('maxlength', 5);
        // Prevent shift key since its not needed
        if (event.shiftKey == true) {
            event.preventDefault();
        }
        // Allow Only: keyboard 0-9, numpad 0-9, backspace, tab, left arrow, right arrow, delete
        if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46) {
        } else {
            event.preventDefault();
        }

    });


    $('.phone-formate')

        .on('keypress', function (e) {
            var key = e.charCode || e.keyCode || 0;

            var phone = $(this);
            if (phone.val().length === 0) {
                phone.val(phone.val() + '(');
            }

            // Auto-format- do not expose the mask as the user begins to type
            if (key !== 8 && key !== 9) {
                if (phone.val().length === 4) {
                    phone.val(phone.val() + ')');
                }
                if (phone.val().length === 5) {
                    phone.val(phone.val() + ' ');
                }
                if (phone.val().length === 9) {
                    phone.val(phone.val() + '-');
                }
                if (phone.val().length >= 14) {
                    phone.val(phone.val().slice(0, 13));
                }
            }

            return (key == 8 ||
                key == 9 ||
                key == 46 ||
                (key >= 48 && key <= 57)
            );

        })
        .on('focus', function () {
            phone = $(this);

            if (phone.val().length === 0) {
                phone.val('(');
            } else {
                var val = phone.val();
                phone.val('').val(val); // Ensure cursor remains at the end
            }
        })

        .on('blur', function () {
            $phone = $(this);

            if ($phone.val() === '(') {
                $phone.val('');
            }
        });


    $(".decimal_number").keydown(function (event) {
        if (event.shiftKey == true) {
            event.preventDefault();
        }
        if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {
        } else {
            event.preventDefault();
        }
        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault();
    });

})
