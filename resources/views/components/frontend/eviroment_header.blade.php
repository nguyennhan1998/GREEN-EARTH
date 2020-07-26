<header id="environment-header" class="environment-header-one">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/home" class="environment-logo">
                    <img src="{{asset("images/logo/unnamed.gif")}}" alt="">
                </a>
            </div>
            <div class="col-md-9">

                <div class="environment-top-strip">
                    <ul class="environment-strip-icon">
                        <li>
                            <a href="#" class="icon-social23"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-social43"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-social33"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-logo22"></a>
                        </li>
                    </ul>

                    <ul class="environment-strip-info">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            8 , Ton That Thuyet
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                           0969696969
                        </li>
                        <li>
                            @guest
                                <a href="{{url("/login")}}"><i class="fa fa-user"></i> Login</a>
                            @else

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </li>
                    </ul>
                </div>

                <div class="environment-main-section">

                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse-1" aria-expanded="true">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{asset("home")}}">Home</a>

                                </li>
                                <li>
                                    <a href="{{asset("about")}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{asset("event")}}">EVENTS</a>
                                </li>
                                <li>
                                    <a href="{{asset("shop")}}">products</a>
                                </li>
                                <li>
                                    <a href="{{asset("blog")}}">Blogs</a>
                                </li>
                                <li class="environment-megamenu-li">
                                    <a href="{{asset("donate-page")}}">Pages</a>
                                </li>
                                <li class="environment-megamenu-li">
                                    <a href="{{asset("shopping-cart")}}">shop</a>
                                </li>
                                <li>
                                    <a href="{{asset("contact")}}">contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div>
                        <form action="{{url("/search")}}" method="post">
                            @method("POST")
                            @csrf
                            <input id="search" class="form-control" placeholder="Search..." name="search" type="text" style="border: 1px solid greenyellow">
                        </form>
                        <div class="table__search" style="display: none">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    @php
                        $myCart1 = session()->has("my_cart")?session("my_cart"):[];
                        $count_item  = count($myCart1);
                        $productIds = [];
                        foreach ($myCart1 as $item){
                            $productIds[] = $item["product_id"];
                        }
                        $grandTotal = 0;
                        $products = \App\Product::find($productIds);
                        foreach ($products as $p){
                            foreach ($myCart1 as $item){
                                if($p->__get("id") == $item["product_id"])
                                    $grandTotal += ($p->__get("price")*$item["qty"]);
                            }
                        }
                    @endphp
                    <ul class="environment-user-option">
                        <li>
                            <a href="/shopping-cart" class="environment-cartbtn environment-bgcolor">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <div class="environment-cart-box">
                                <h2>You have {{$count_item}} items in the cart</h2>
                                <ul>
                                    @foreach($products as $p)
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="{{$p->getImage()}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="environment-cartbox-text">
                                            <h6>
                                                <a href="#">{{$p->__get("name")}}</a>
                                            </h6>
                                            <div class="environment-rating">
                                                <span class="environment-rating-box" style="width:80%"></span>
                                            </div>
                                            <span class="environment-cartbox-price environment-color">
                                                        {{$p->getPrice()}}
                                                        <small>$43.00</small>
                                                    </span>
                                        </div>
                                    </li>
                                    @endforeach
{{--                                    <li>--}}
{{--                                        <figure>--}}
{{--                                            <a href="#">--}}
{{--                                                <img src="{{asset("extra-images/cartbox-2.jpg")}}" alt="">--}}
{{--                                            </a>--}}
{{--                                        </figure>--}}
{{--                                        <div class="environment-cartbox-text">--}}
{{--                                            <h6>--}}
{{--                                                <a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="environment-rating">--}}
{{--                                                <span class="environment-rating-box" style="width:100%"></span>--}}
{{--                                            </div>--}}
{{--                                            <span class="environment-cartbox-price environment-color">$21.00</span>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                </ul>
                                <h5>
                                    Subtotal
                                    <span class="environment-color">${{$grandTotal}}</span>
                                </h5>
                                <div class="environment-cart-link">
                                    <a href="/checkout" class="environment-cartbox-btn environment-bgcolorhover">
                                        <i class="flaticon-tool"></i>
                                        Go to Checkout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
