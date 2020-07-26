@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Event detail</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Event detail</li>
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
                        <figure class="environment-event-thumb"><img src="{{$event->getImage()}}" alt=""></figure>
                        <div class="environment-countdown">
                            <div id="environment-countdown"></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a nunc dui. Curabitur
                            dignissim luctus nisi id euismod. Don ec tincidunt diam vel nibh euismod tempus.</p>
                        <ul class="event-detail-option">
                            <li>
                                Date:
                                <time datetime="2018-02-14 20:00">
                                    @php $start_at = strtotime($event->__get("start_at"));

                                            $datestart = date('Y-m-d',$start_at);


                                            $end_at=strtotime($event->__get("end_at"));
                                            $dateend=date('Y-m-d',$end_at);

                                    @endphp
                                    {{$datestart}} - {{$dateend}}
                                </time>
                            </li>
                            <li>
                                Organizer:
                                <p>{{$event->Organize->__get("name")}}</p>
                            </li>
                            <li>
                                Location:
                                <p>{{$event->Organize->__get("address")}}</p>
                            </li>
                        </ul>
                        <div class="environment-section-heading"><h2><span>Event Description</span></h2></div>
                            @php
                            if ($event->__get("content")!=null) {
                                $doc = new DOMDocument();
                                $doc->loadHTML($event->__get("content"));
                                 echo $doc->saveHTML();
                            } else {
                            echo "no content";
                            }
                            @endphp

                        <div class="environment-section-heading"><h2><span>Event Location</span></h2></div>
                        <div class="environment-event-map">
                            <div id="map"></div>
                        </div>

                        <div class="container">

                            <div class="col-md-7">
                                <div class="environment-donation-section">
                                    <form action="{{url("/save-money/{$event->id}")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="environment-section-heading"><h2><span>Select Donation Amount</span>
                                            </h2></div>
                                        <ul>
                                            <li class="current"><span><input type="radio" name="sotienungho"
                                                                             value="10000"></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 1:</b> 10,000 VNĐ</span>
                                            </li>
                                            <li><span><input type="radio" name="sotienungho" value="20000" required></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 2:</b> 20,000 VNĐ</span>
                                            </li>
                                            <li><span><input type="radio" name="sotienungho" value="50000" required></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 3:</b> 50,000 VNĐ</span>
                                            </li>
                                            <li><span><input type="radio" name="sotienungho" value="100000" required></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 4:</b> 100,000 VNĐ</span>
                                            </li>
                                            <li><span><input type="radio" name="sotienungho" value="200000" required></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 5:</b> 200,000 VNĐ</span>
                                            </li>
                                            <li><span><input type="radio" name="sotienungho" value="500000" required></span><span
                                                        style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 6:</b> 500,000 VNĐ</span>
                                            </li>

                                            <li class="add-amount">
                                                <div class="environment-section-heading"><h2>
                                                        <span>Enter Custom Amount</span></h2></div>
                                                <div class="environment-add-amount">
                                                    <input type="text" name="donatevaluecustom">
                                                </div>
                                            </li>
                                            <div>
                                                <div class="environment-Donation-form">
                                                    <ul>
                                                        <li><p>Personal Info:</p></li>
                                                        <li>
                                                            <input type="text" name="name">
                                                            <i class="fa fa-user"></i>
                                                        </li>
                                                        <li>
                                                            <input type="text" name="email">
                                                            <i class="fa fa-envelope"></i>
                                                        </li>
                                                        <li>
                                                            <input type="text" name="address">
                                                            <i class="fa fa-address-book-o"></i>
                                                        </li>
                                                        <li>
                                                            <input type="text" name="phone">
                                                            <i class="fa fa-phone"></i>
                                                        </li>
                                                    </ul>
                                                    <button type="submit">submit</button>
                                                </div>
                                            </div>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="environment-cause environment-related-cause">
                            <ul class="row">
                                <li class="col-md-12">
                                    <figure>
                                        <figcaption><a href="cause-detail.html">12 Donors</a></figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Go Green Eco Movement Donate For It</a></h5>
                                        <div class="skillst">
                                            @if($event->raiser_money > $event->target_money)
                                                <span class="color" style="color:red;">Goal $ {{$event->__get("target_money")}} <span>The money has exceeded the target
</span></span>
                                                <span>Raised $ {{$event->__get("raiser_money")}}</span>
                                            @else
                                                <span class="color">Goal $ {{$event->__get("target_money")}} <span>
</span></span>
                                                <span>Raised $ {{$event->__get("raiser_money")}}</span>
                                            @endif


                                            @php
                                                $f=$event->__get("target_money");
                                                $s=$event->__get("raiser_money");
                                                $percent=($s/$f)*100;
                                                if($percent>100){
                                                    $percent=100;

                                                }
                                            @endphp

                                            <div class="sonny_progressbar" data-width="{{$percent}}"><p class="title"></p>
                                                <div class="bar-container "
                                                     style="background-color:#3f3932;height:8px;"><span
                                                            class="backgroundBar"></span><span class="targetBar"
                                                                                               style="width:25%;background-color:#CCC;"></span><span
                                                            class="bar"
                                                            style="background-color: rgb(156, 201, 0); opacity: 1; width: {{$percent}}%;"><small>{{$percent}}</small></span>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                        <div class="environment-prenxt-post">
                            <ul>
                                <li>
                                    <div class="environment-prev-post">
                                        <figure><a href="404.html"><img src="extra-images/post-img1.jpg" alt=""></a></figure>
                                        <div class="environment-prev-artical">
                                            <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="404.html" class="environment-post-arrow"><i class="fa fa-angle-left"></i>
                                                Previous Post</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="environment-next-post">
                                        <figure><a href="404.html"><img src="{{asset("extra-images/post-img2.jpg")}}" alt=""></a>
                                        </figure>
                                        <div class="environment-next-artical">
                                            <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                            <a href="404.html" class="environment-post-arrow">Next Post <i
                                                        class="fa fa-angle-right"></i></a>
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
