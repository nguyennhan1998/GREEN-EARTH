<header id="environment-header" class="environment-header-one">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{"home"}}" class="environment-logo">
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
                                    <a href="{{asset("projects")}}">Projects</a>
                                    <ul class="environment-dropdown-menu">


                                        <li>
                                            <a href="{{asset("projects-detail")}}">Project Detail</a>

                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{asset("blog")}}">Blogs</a>
                                </li>
                                <li class="environment-megamenu-li">
                                    <a href="#">Pages</a>
                                </li>
                                <li class="environment-megamenu-li">
                                    <a href="{{asset("shop")}}">shop</a>
                                </li>
                                <li>
                                    <a href="{{asset("contact")}}">contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <ul class="environment-user-option">
                        <li>
                            <a href="/shopping-cart" class="environment-cartbtn environment-bgcolor">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <div class="environment-cart-box">
                                <h2>You have 3 items in the cart</h2>
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="extra-images/cartbox-1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="environment-cartbox-text">
                                            <h6>
                                                <a href="#">Key Management Model The 60+ Models</a>
                                            </h6>
                                            <div class="environment-rating">
                                                <span class="environment-rating-box" style="width:80%"></span>
                                            </div>
                                            <span class="environment-cartbox-price environment-color">
                                                        $35.99
                                                        <small>$43.00</small>
                                                    </span>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="extra-images/cartbox-2.jpg" alt="">
                                            </a>
                                        </figure>
                                        <div class="environment-cartbox-text">
                                            <h6>
                                                <a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a>
                                            </h6>
                                            <div class="environment-rating">
                                                <span class="environment-rating-box" style="width:100%"></span>
                                            </div>
                                            <span class="environment-cartbox-price environment-color">$21.00</span>
                                        </div>
                                    </li>
                                </ul>
                                <h5>
                                    Subtotal
                                    <span class="environment-color">$1343</span>
                                </h5>
                                <div class="environment-cart-link">
                                    <a href="#" class="environment-cartbox-btn environment-bgcolorhover">
                                        <i class="flaticon-tool"></i>
                                        Go to Checkout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="environment-search-btn environment-bgcolor">
                                <i class="fa fa-search"></i>
                            </a>
                            <form class="environment-search-popup">
                                <input value="Search Key Word"
                                       onblur="if(this.value == '') { this.value ='Search Key Word'; }"
                                       onfocus="if(this.value =='Search Key Word') { this.value = ''; }" type="text">
                                <input value="" type="submit">
                                <i class="fa fa-search"></i>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
