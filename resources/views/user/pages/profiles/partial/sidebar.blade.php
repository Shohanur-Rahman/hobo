<aside class="col-md-3 col-lg-3 pb-4">
    <div class="card ">
        <div class="card-header bg-white font-weight-bold h5">My Account</div>
        <div class="card-body">
            <ul class="list-unstyled ProfileCategory">
                <li class=" " >
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('profiles.index')}}"> Account Dashboard</a>
                </li>

                <li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('profiles.edit')}}">Edit Profile</a>
                </li>

                <li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('cart.index')}}">My Carts</a>
                </li>

                <li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('wish-lists.index')}}">My WishList</a>
                </li>

                <li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('orders-details.index')}}">My Orders</a>
                </li>

                {{--<li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="#">My Product Reviews</a>
                </li>--}}

                <li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('shipping-address.index')}}">Shipping Addresses</a>
                </li>

                {{--<li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('shipping-address.create')}}">New Shipping Address</a>
                </li>--}}

                {{--<li>
                    <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
                    <a href="{{route('change-password.edit')}}">Change Password</a>
                </li>--}}
            </ul>
        </div>
    </div>
</aside>
