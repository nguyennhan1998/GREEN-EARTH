@extends("frontend.layout")
@section("content")

    <div class="environment-main-wrapper">

        <div class="environment-main-content">

            <div class="environment-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="environment-shop environment-shop-list">
                                <ul class="row">
                                    @foreach($product as $p)
                                    <li class="col-md-12">
                                        <div class="environment-shop-list-wrap">
                                            <figure><a href="{{"/shop-detail/{$p->__get('id')}"}}"><img
                                                            src="{{$p->getImage()}}" alt=""><i
                                                            class="fa fa-link"></i></a></figure>
                                            <section>
                                                <h5><a href="{{"/shop-detail/{$p->__get('id')}"}}">{{$p->__get("name")}}</a></h5>
                                                <small>( 7 Costumer Reviews )</small>
                                                <div class="star-rating"><span class="star-rating-box"
                                                                               style="width:68%"></span></div>
                                                <span class="environment-price-cartbox">
                                                    <del>$ 20.00</del>
                                                    {{$p->__get("price")}}
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul a
                                                    nunc dui. Cu rabitur dignissim luctus nisi id euismod. Donec
                                                    tincidunt diam nibh euismodte mpus rutrum sapien posuere
                                                    vehicula</p>
                                                <a href="{{"/shop-detail/{$p->__get('id')}"}}" class="environment-readmore-btn">Read
                                                    More</a>
                                            </section>
                                        </div>
                                    </li>
                                   @endforeach
                                </ul>
                            </div>

                            <div class="environment-pagination">
                                <ul class="page-numbers">
                                    <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i
                                                        class="fa fa-angle-left"></i></span></a></li>
                                    <li><span class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="404.html">2</a></li>
                                    <li><a class="page-numbers" href="404.html">3</a></li>
                                    <li><a class="page-numbers" href="404.html">4</a></li>
                                    <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i
                                                        class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div>

                        </div>

                        <aside class="col-md-3">

                            <div class="widget widget_search">
                                <form>
                                    <input type="text" value="Search"
                                           onblur="if(this.value == '') { this.value ='Search'; }"
                                           onfocus="if(this.value =='Search') { this.value = ''; }">
                                    <label>
                                        <input type="submit" value="">
                                    </label>
                                </form>
                            </div>


                            <div class="widget widget_recent_blog">
                                <div class="environment-widget-heading"><h2>Recent Blogs</h2></div>
                                <ul>
                                    <li>
                                        <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img1.jpg"
                                                                                alt=""></a> <a href="blog-detail.html"
                                                                                               class="environment-post-hover"><i
                                                        class="fa fa-angle-double-right"></i></a></figure>
                                        <div class="environment-recentpost">
                                            <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper
                                                    arcu</a></h6>
                                            <ul class="widget-post">
                                                <li>
                                                    <time datetime="2008-02-14 20:00">20 Feb 2017 |</time>
                                                </li>
                                                <li><a href="blog-detail.html"> by John Billy</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img2.jpg"
                                                                                alt=""></a> <a href="blog-detail.html"
                                                                                               class="environment-post-hover"><i
                                                        class="fa fa-angle-double-right"></i></a></figure>
                                        <div class="environment-recentpost">
                                            <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper
                                                    arcu</a></h6>
                                            <ul class="widget-post">
                                                <li>
                                                    <time datetime="2008-02-14 20:00">20 Feb 2017 |</time>
                                                </li>
                                                <li><a href="blog-detail.html"> by John Billy</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <figure><a href="blog-detail.html"><img src="extra-images/widget-post-img3.jpg"
                                                                                alt=""></a> <a href="blog-detail.html"
                                                                                               class="environment-post-hover"><i
                                                        class="fa fa-angle-double-right"></i></a></figure>
                                        <div class="environment-recentpost">
                                            <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper
                                                    arcu</a></h6>
                                            <ul class="widget-post">
                                                <li>
                                                    <time datetime="2008-02-14 20:00">20 Feb 2017 |</time>
                                                </li>
                                                <li><a href="blog-detail.html"> by John Billy</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="widget widget_events">
                                <div class="environment-widget-heading"><h2>Upcoming Events</h2></div>
                                <ul>
                                    <li>
                                        <time datetime="2008-02-14 20:00">20 FEB</time>
                                        <div class="environment-event-text">
                                            <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a>
                                            </h6>
                                            <span>Salford road, east London, UK</span>
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">10 MAY</time>
                                        <div class="environment-event-text">
                                            <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a>
                                            </h6>
                                            <span>Salford road, east London, UK</span>
                                        </div>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">07 AUG</time>
                                        <div class="environment-event-text">
                                            <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a>
                                            </h6>
                                            <span>Salford road, east London, UK</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="widget widget_archive">
                                <div class="environment-widget-heading"><h2>Calender Archives</h2></div>
                                <ul>
                                    <li><a href="404.html">13 February 2017</a></li>
                                    <li><a href="404.html">07 March 2017</a></li>
                                    <li><a href="404.html">21 August 2017</a></li>
                                    <li><a href="404.html">19 December 2017</a></li>
                                </ul>
                            </div>


                            <div class="widget widget_gallery">
                                <div class="environment-widget-heading"><h2>Our Gallery</h2></div>
                                <ul>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img1.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img1.jpg" alt=""></a>
                                    </li>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img2.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img2.jpg" alt=""></a>
                                    </li>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img3.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img3.jpg" alt=""></a>
                                    </li>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img4.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img4.jpg" alt=""></a>
                                    </li>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img5.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img5.jpg" alt=""></a>
                                    </li>
                                    <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img6.jpg"
                                           class="fancybox"><img src="extra-images/widget-gallery-img6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="widget widget_cetagories">
                                <div class="environment-widget-heading"><h2>Cetagories</h2></div>
                                <ul>
                                    <li><a href="404.html">Organic</a></li>
                                    <li><a href="404.html">Ecosystem</a></li>
                                    <li><a href="404.html">Recycling</a></li>
                                    <li><a href="404.html">Environmental</a></li>
                                </ul>
                            </div>

                        </aside>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection