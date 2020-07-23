@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Events</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="environment-event environment-event-grid">
                            <ul class="row">
                                @foreach($events as $event)
                                <li class="col-md-6">
                                    <figure>
                                        <a href="#"><img src="{{$event->getImage()}}" alt=""><i class="fa fa-search-plus"></i></a>
{{--                                        <time datetime="2008-02-14 20:00">12<br>FEB</time>--}}
                                    </figure>
                                    <div class="environment-event-grid-text">
                                        <h5><a href="#">{{$event->__get("title")}}</a></h5>
                                        <ul class="environment-large-option">
                                            <li>
                                                Start At:
                                                <p>{{$event->__get("start_at")}}</p>
                                            </li>
                                            <li>
                                                End At:
                                                <p>{{$event->__get("end_at")}}</p>
                                            </li>
                                        </ul>
                                        <p>{{$event->__get("description")}}</p>
                                        <div>
                                            <a href="{{"/event-detail/{$event->__get('id')}"}}" class="environment-readmore-btn">Read More</a>
                                        </div>

                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="environment-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="404.html">2</a></li>
                                <li><a class="page-numbers" href="404.html">3</a></li>
                                <li><a class="page-numbers" href="404.html">4</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                            </ul>
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


                        <div class="widget widget_events">
                            <div class="environment-widget-heading"><h2>Upcoming Events</h2></div>
                            <ul>
                                <li>
                                    <time datetime="2008-02-14 20:00">20 FEB</time>
                                    <div class="environment-event-text">
                                        <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a></h6>
                                        <span>Salford road, east London, UK</span>
                                    </div>
                                </li>
                                <li>
                                    <time datetime="2008-02-14 20:00">10 MAY</time>
                                    <div class="environment-event-text">
                                        <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a></h6>
                                        <span>Salford road, east London, UK</span>
                                    </div>
                                </li>
                                <li>
                                    <time datetime="2008-02-14 20:00">07 AUG</time>
                                    <div class="environment-event-text">
                                        <h6><a href="event-detail.html">Suspendisse imperdi et risus vitae nunc</a></h6>
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
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img1.jpg" class="fancybox"><img src="extra-images/widget-gallery-img1.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img2.jpg" class="fancybox"><img src="extra-images/widget-gallery-img2.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img3.jpg" class="fancybox"><img src="extra-images/widget-gallery-img3.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img4.jpg" class="fancybox"><img src="extra-images/widget-gallery-img4.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img5.jpg" class="fancybox"><img src="extra-images/widget-gallery-img5.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/widget-gallery-img6.jpg" class="fancybox"><img src="extra-images/widget-gallery-img6.jpg" alt=""></a></li>
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
