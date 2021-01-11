<!--footer-area start-->
<footer class="footer-area mt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="company-info">
                    <img
                        src="{{$siteSetting != null ? asset($siteSetting->logo_url) : asset('user/assets/images/logos/logo-blue.png')}}"
                        alt="logo"/>
                    @if($siteSetting)
                        <p>

                            {!!html_entity_decode($siteSetting->line1 ? $siteSetting->line1 . ', ' : '')!!}
                            {!!html_entity_decode($siteSetting->line2 ? $siteSetting->line2 . '<br/>' : '')!!}
                         </p>
                         <p>
                            {!!html_entity_decode($siteSetting->city ? $siteSetting->city . ', ' : '')!!}
                            {!!html_entity_decode($siteSetting->state ? $siteSetting->state . ', ' : '')!!}
                            {!!html_entity_decode($siteSetting->postcode ? $siteSetting->postcode . '<br/>' : '')!!}
                         </p>
                         <!--{!!html_entity_decode($siteSetting->address ? $siteSetting->address . '' : '')!!}-->

                        <p>Phone: {{$siteSetting != null ? $siteSetting->phone : 'XXX XXXX XXXX'}}</p>
                        <p>Email: {{$siteSetting !=null ? $siteSetting->email : 'email@email.com'}}</p>
                    @endif
                </div>
                <div class="copyright">
                    <p>Copyright {{ date('Y') }} &copy; <a href="#">HOBO</a>. All rights reserved.</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Information</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{route('pages.about')}}" target="_blank">About Us</a></li>
                            <li><a href="{{route('pages.contact')}}" target="_blank">Contact Us</a></li>
                            <li><a href="{{route('orders-details.index')}}" target="_blank">Delivery information</a>
                            </li>
                            <li><a href="{{route('pages.privacy.policy')}}" target="_blank">Privacy Policy</a></li>
                            <li><a href="{{route('pages.terms.conditions')}}" target="_blank">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Customer Care</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{route('profiles.index')}}" target="_blank">My Account</a></li>
                            <li><a href="{{route('orders-details.index')}}" target="_blank">Order History</a></li>
                            <li><a href="{{route('wish-lists.index')}}" target="_blank">Wish List</a></li>
                            <li><a href="{{route('customer-supports.create')}}" target="_blank" target="_blank">Customer
                                    Service</a></li>
                            <li><a href="{{route('pages.faq')}}" target="_blank">FAQs</a></li>
                            <li><a href="{{route('pages.Media.Inquiries')}}" target="_blank">Media-inquiries</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h3>Sign Up to <strong>Newsletter</strong></h3>
                        <p>Subscribe our newsletter gor get notification about information discount.</p>
                        <form class="custom-validate" action="javascript:" method="post">
                            @csrf
                            <input type="email" name="email" id="email" placeholder="Your email address" required/>
                            @auth()
                                <button type="submit" onclick="subscribe()">Subscribe</button>
                                <span class="error text-danger"></span>
                                <span class="success text-success"></span>
                            @else
                                <button :disabled class="disabled">login first</button>
                            @endauth
                        </form>
                    </div>
                    <div class="social-icons style-2">
                        <strong>GET IN TOUCH !</strong>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->


<script>


    $('.product-id').click(function (e) {
        e.preventDefault();
        var productId = $(this).attr('id');

        $.ajax({
            type: 'post',
            url: 'wish-lists',
            data: {product_id: productId},

            success: function (resp) {
                if (!isNaN(resp) && resp != '') {
                    $('#wishListCount').html(resp)
                }
            },

            error: function (error) {
                console.log('error')
            }
        })

    });


    $('#email').keydown(function () {
        $('.error').text('');
        $('.success').text('');

    });


    function subscribe() {
        var email = $('#email').val();

        $.ajax({
            type: 'post',
            data: {email: email},
            url: 'newsletter',

            success: function (resp) {
                if (resp == 'success') {
                    $('.success').html('Subscribed Successfully');
                    $('.error').text('');

                }
            },

            error: function (xhr, status, error) {
                /* alert(xhr.responseText);*/
                $('.error').html(xhr.responseJSON.errors.email[0])
            }
        })
    }

</script>

<!-- main js -->
<script src="{{asset('user/assets/js/main.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
