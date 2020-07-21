@extends("frontend.layout")
@section("content")
    <div class="environment-main-content">
        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="environment-shop-detail-section">
                            <div class="environment-images">
                                <ul class="environment-images-list">
                                    <li><a href="#"><img src="{{$product->__get("image2")}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{$product->__get("image3")}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{$product->__get("image4")}}" alt=""></a></li>
                                </ul>
                                <div class="environment-images-thumb">
                                    <figure><img src="{{$product->__get("image1")}}" alt=""></figure>
                                </div>
                            </div>
                            <div class="environment-shop-summery">
                                <h4>{{$product->__get("name")}}</h4>
                                <small>( 7 Costumer Reviews )</small>
                                <div class="star-rating"><span class="star-rating-box" style="width:68%"></span></div>
                                <span class="environment-price-cartbox">
                                    <del>$ 20.00</del>
                                    {{$product->__get("price")}}
                                </span>
                                <p>Lorem ipsum dolor sit amet, cosectetur adipiscge lit. Vestibulum a nunc dui. Curbitur digniss luctus nisi id euismod.</p>
                                <button  onclick="addToCart({{$product->__get("id")}});" class="environment-readmore-btn">Add To Cart</button>
                                <div class="environment-select"><input type="number" name="quantity" min="01" max="10"></div>
                                <ul class="environment-shop-Cetagory">
                                    <li>
                                        Cetagory :
                                        <a href="404.html">Environment ,</a>
                                        <a href="404.html"> Energy ,</a>
                                        <a href="404.html"> Eco</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="environment-shop-tabs">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="home">
                                    <div class="environment-section-heading"><h2><span>Product Description</span></h2></div>
                                    <div class="environment-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero enim, lacinia finibus ante et, imperdiet finibus risus. Donec malesuada luctus elit nec hendrerit.Integer ex sapien, eleifend sit amet tellus ut, porttitor dictum velit. Nulla scelerisque, nisl eu maximus bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero enim, lacinia finibus ante et, imperdiet finibus risus. Donec malesuada luctus elit nec hendrerit.Integer ex sapien, eleifend sit amet tellus ut, porttitor dictum velit. Nulla scelerisque,</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <div class="comments-area">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="col-md-3">
                        <div class="widget widget_search">
                            <form>
                                <input type="text" value="Search" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }">
                                <label>
                                    <input type="submit" value="">
                                </label>
                            </form>
                        </div>
                        <div class="widget widget_recent_blog">
                            <div class="environment-widget-heading"><h2>Recent Blogs</h2></div>
                            <ul>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img1.jpg" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="blog-detail.html"> by John Billy</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img2.jpg" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="blog-detail.html"> by John Billy</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img3.jpg" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="blog-detail.html"> by John Billy</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Your <span>Feedback</span></h2></div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=723562798478841&autoLogAppEvents=1"
                                nonce="sbTHuYxo"></script>
                        <div class="fb-comments"
                             data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                             data-numposts="2" data-width="auto" data-colorscheme="light"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
