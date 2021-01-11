$(window).scroll(function () {
    var sticky = $('.main_menubar'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed_main_navbar');
    else sticky.removeClass('fixed');
});


$(window).resize(function () {
    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" + ($(this).width() + 100) + "px");
    });
});

$(document).ready(function () {

    $('.flip').hover(function(){
        $(this).find('.card').toggleClass('flipped');

    });

    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" + ($(this).width() + 100) + "px");
    });

    new WOW().init();


    $(".dummy_cart_btn").click(function (e) {

        var $this = $(this);
        $this.addClass("cart-processing");
        $this.prop("disabled", true);
        var submitURL = $.trim($this.attr('url'));
        var formId = $.trim($this.attr('frm'));
        $this.html("<i class='fa fa-circle-o-notch fa-spin'></i> Processing");


        e.preventDefault();
        $this.button('loading');
        /*Ajax Request Header setup*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* Submit form data using ajax*/
        $.ajax({
            url: submitURL,
            method: 'post',
            data: $(formId).serialize(),
            success: function (response) {
                if (response.status == true) {
                    $this.removeClass("cart-processing");
                    $this.prop("disabled", false);
                    $this.html("Add to Cart");
                }
                LoadCartList(response.data);

            },
            error: function (e) {

                if(e.statusText == "Unauthorized"){
                    window.location.replace(absoulatePath + "/login");
                }
                console.log(e);
            }
        });
    });



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


});


function LoadCartList(cartList) {
    $(".dummy_cart_list_binding").html("");

    $(".dummy_total_cart").text(cartList.length);
    var totalPrice = 0;

    $.each(cartList, function (index, value) {

        if (index < 2) {
            var cartList = "<li> <div class=\"mini-cart-thumb\">" +
                "<a href=\"" + absoulatePath + "/product/" + value.product.slug + "\"><img src=\"" + absoulatePath + "/public/" + value.product.featured_image + "\" alt=\"\"></a>" +
                "</div>" + "<div class=\"mini-cart-heading\">" +
                "<span>$ " + value.product.new_price + "x " + value.quantity + "</span><h5><a href=\"" + absoulatePath + "/product/" + value.product.slug + "\">" + value.product.title + "</a></h5></div>" +
                "<div class=\"mini-cart-remove\"><a class=\"cart-removal\" title=\"Remove Item\" href=\"" + absoulatePath + "/delete/" + value.id + "\"><i class=\"ti-close\"></i></a></div></li>"

            $(".dummy_cart_list_binding").append(cartList);
        }

        totalPrice += (value.product.new_price * value.quantity);


    });

    $(".dummy_total_price").text(totalPrice.toFixed(2));

}
