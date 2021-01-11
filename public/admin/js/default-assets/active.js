(function ($) {
    "use strict";

    // :: Variables
    var ecaps_window = $(window);
    var dd = $("dd");
    var pageWrapper = $(".ecaps-page-wrapper");
    var sideMenuArea = $(".ecaps-sidemenu-area");
    var fullScreen = $("body")[0];

    // :: Preloader active code
    ecaps_window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#ecapsSideNav').slimscroll({
            height: '100%',
            size: '3px',
            position: 'right',
            color: '#9c9c9c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#messageBox, #notificationsBox').slimscroll({
            height: '300px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('.widgetbox').slimscroll({
            height: '400px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#dashboardTimeline').slimscroll({
            height: '250px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#themewrapper').slimscroll({
            height: '600px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#dashboardTable').slimscroll({
            height: '400px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#chatBox').slimscroll({
            height: '700px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }
    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#chatBoxsm').slimscroll({
            height: '300px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#chatBoxbody').slimscroll({
            height: '600px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#chooseLayout, #quickSettingPanel').slimscroll({
            height: '100%',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

})(jQuery);
