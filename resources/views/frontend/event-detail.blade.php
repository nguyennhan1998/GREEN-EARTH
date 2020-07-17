@extends("frontend.layout")
@section("content")

    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="environment-rich-editor environment-event-richeditor">
                            <h1><a href="#">{{$event->__get("title")}}</a></h1>
                            <td>
                                @php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML($event->__get("content"));
                                 echo $doc->saveHTML();
                                @endphp
                            </td>
                        </div>
                        <div class="environment-section-heading"><h2><span>Event Location</span></h2></div>
                        <div class="environment-event-map">
                            <div id="map"></div>
                        </div>
                        <div class="environment-prenxt-post">
                            <ul>
                                <li>
                                    <div class="environment-prev-post">
                                        <figure><a href="#"><img src="{{asset("extra-images/post-img1.jpg")}}" alt=""></a></figure>
                                        <div class="environment-prev-artical">
                                            <h3><a href="#">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="#" class="environment-post-arrow"><i class="fa fa-angle-left"></i> Previous Post</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="environment-next-post">
                                        <figure><a href="#"><img src="{{asset("extra-images/post-img2.jpg")}}" alt=""></a></figure>
                                        <div class="environment-next-artical">
                                            <h3><a href="#">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="#" class="environment-post-arrow">Next Post <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="environment-tag-wrap">
                            <div class="environment-post-tags">
                                <div class="environment-tags">
                                    <span>Tags:</span>
                                    <a href="#">Energy</a>
                                    <a href="#">Animals</a>
                                    <a href="#">Help</a>
                                </div>
                                <div class="environment-blog-social">
                                    <ul>
                                        <li><span>Share:</span></li>
                                        <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                        <li><a href="https://twitter.com/login" class="icon-social43"></a></li>
                                        <li><a href="https://pk.linkedin.com/" class="icon-linkedin"></a></li>
                                        <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="environment-event-organizer">
                            <div class="environment-section-heading"><h2><span>Event Organizer</span></h2></div>
                            <p>Praesent mattis sapien nec lorem dictum, eget euismod sem egestas. Fusce facilisis fermentum justo sit amet semper. Aliquam aliquet vel felis ac pellentesque. Mauris blandit nec purus sed viverra. Vestibulum a sem in nisi efficitur cursus.</p>
                            <div class="row">
                                <div class="col-md-7">
                                    <ul class="environment-list-style-one">
                                        <li>Phasellus eu tincidunt orci, eu laoreet justo. Vivamus nec </li>
                                        <li>Narturient montes, nascetur ridiculus mus. Interdum.</li>
                                        <li>Ut porta arcu diam, a congue dui placerat eget. </li>
                                        <li>Quisque fermentum turpis turpis, at vulputate enim phar.</li>
                                        <li>Vestibulum venenatis pulvinar ipsum nec efficitur. </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{asset("extra-images/organizer-img.jpg")}}" alt="" class="event-detail-img">
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
                                    <figure><a href="#"><img src="extra-images/widget-post-img1.jpg" alt=""></a> <a href="#" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="#">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="#"> by John Billy</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="extra-images/widget-post-img2.jpg" alt=""></a> <a href="#" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="#">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="#"> by John Billy</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="#"><img src="extra-images/widget-post-img3.jpg" alt=""></a> <a href="#" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                    <div class="environment-recentpost">
                                        <h6><a href="#">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                        <ul class="widget-post">
                                            <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                            <li><a href="#"> by John Billy</a></li>
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
                            <div class="environment-widget-heading"><h2>Categories</h2></div>
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
