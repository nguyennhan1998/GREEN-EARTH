@extends("frontend.layout")
@section("content")

    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <figure class="environment-event-thumb"><img src="extra-images/event-detail-img.jpg" alt=""></figure>
                        <div class="environment-countdown">
                            <div id="environment-countdown"></div>
                        </div>
                        <div class="environment-rich-editor environment-event-richeditor">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur dignissim luctus nisi id euismod. Don ec tincidunt diam vel nibh euismod tempus.</p>
                            <ul class="event-detail-option">
                                <li>
                                    Date:
                                    <time datetime="2008-02-14 20:00">16 Feb 2017 - 20 Feb 2017</time>
                                </li>
                                <li>
                                    Organizer:
                                    <p>John Henry</p>
                                </li>
                                <li>
                                    Location:
                                    <p>Salford road, east London, UK</p>
                                </li>
                            </ul>
                            <div class="environment-section-heading"><h2><span>Event Description</span></h2></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis purus nulla, at rhoncus elit non. Ut luct ac sagittis porttitor Suspendisse at orci ac us libero at laore ncus. Praesent fermentum lacus at nulla hendrerit facilisis. Ut ips us, mollis non solli citu ac sagittis porttitor.</p>
                            <p>Phasellus lobortis mattis dolor ac laoreet. Pellentesque feugiat scelerisque libero, et conllis cidunt at. Aen ac sagittis porttitor Suspendisse at orci ac ean inn luctus, felis in, luctus elit.</p>
                            <blockquote>Phasellus vitae ligula sodales, auctor orci quis, fermentm velit. Ut eu velit varius, ultrices eros in, fa ucibus arcu. Ut eget vestibulum odio, id ullamcorper arcu.</blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis purusla, at rhoncus elit non. Ut luct ac sagittis porttitor. Su spendisse at orci ac us libero at laore ncus. Praesent fermentum l at nulla hendrerit facilisis. Ut ips us, mollis non sollicitudin quis, lacinia a tellus.</p>
                        </div>
                        <div class="environment-section-heading"><h2><span>Event Location</span></h2></div>
                        <div class="environment-event-map">
                            <div id="map"></div>
                        </div>
                        <div class="environment-prenxt-post">
                            <ul>
                                <li>
                                    <div class="environment-prev-post">
                                        <figure><a href="404.html"><img src="extra-images/post-img1.jpg" alt=""></a></figure>
                                        <div class="environment-prev-artical">
                                            <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="404.html" class="environment-post-arrow"><i class="fa fa-angle-left"></i> Previous Post</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="environment-next-post">
                                        <figure><a href="404.html"><img src="extra-images/post-img2.jpg" alt=""></a></figure>
                                        <div class="environment-next-artical">
                                            <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="404.html" class="environment-post-arrow">Next Post <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="environment-tag-wrap">
                            <div class="environment-post-tags">
                                <div class="environment-tags">
                                    <span>Tags:</span>
                                    <a href="404.html">Energy</a>
                                    <a href="404.html">Animals</a>
                                    <a href="404.html">Help</a>
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
                                    <img src="extra-images/organizer-img.jpg" alt="" class="event-detail-img">
                                </div>
                            </div>
                        </div>

                        <div class="environment-event environment-related-event">
                            <div class="environment-section-heading"><h2><span>Related Event</span></h2></div>
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure>
                                        <a href="event-detail.html"><img src="extra-images/event-related-img1.jpg" alt=""></a>
                                        <time datetime="2008-02-14 20:00">12<br>FEB</time>
                                    </figure>
                                    <div class="environment-related-event-text">
                                        <h5><a href="event-detail.html">Praesent mattis sapien nec lorem dictum eget</a></h5>
                                        <ul class="environment-large-option">
                                            <li>
                                                Organizer:
                                                <a href="event-detail.html">G. David</a>
                                            </li>
                                            <li>
                                                Time:
                                                <time datetime="2008-02-14 20:00">12:00 AM</time>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="event-detail.html"><img src="extra-images/event-related-img2.jpg" alt=""></a>
                                        <time datetime="2008-02-14 20:00">22<br>MAY</time>
                                    </figure>
                                    <div class="environment-related-event-text">
                                        <h5><a href="event-detail.html">Praesent mattis sapien nec lorem dictum eget</a></h5>
                                        <ul class="environment-large-option">
                                            <li>
                                                Organizer:
                                                <a href="event-detail.html">G. David</a>
                                            </li>
                                            <li>
                                                Time:
                                                <time datetime="2008-02-14 20:00">12:00 AM</time>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure>
                                        <a href="event-detail.html"><img src="extra-images/event-related-img3.jpg" alt=""></a>
                                        <time datetime="2008-02-14 20:00">21<br>AUG</time>
                                    </figure>
                                    <div class="environment-related-event-text">
                                        <h5><a href="event-detail.html">Praesent mattis sapien nec lorem dictum eget</a></h5>
                                        <ul class="environment-large-option">
                                            <li>
                                                Organizer:
                                                <a href="event-detail.html">G. David</a>
                                            </li>
                                            <li>
                                                Time:
                                                <time datetime="2008-02-14 20:00">12:00 AM</time>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
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

@endsection
