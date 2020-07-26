@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Donate detail</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Donate detail</li>
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
                    @php
                        $f=$donate->__get("target_money");
                        $s=$donate->__get("raiser_money");
                        $percent=($s/$f)*100;
                        if($percent>100){
                            $percent=100;

                        }
                    @endphp
                    <figure class="environment-postthumb"><img src="{{asset("extra-images/cause-detail-img.jpg")}}" alt=""></figure>
                    <div class="environment-rich-editor">
                        <p>Praesent mattis sapien nec lorem dictum, eget euismod sem egestas. Fusce facilisis fermentum justo sit amet semper. Aliqua aliquet vel felis ac pellentesque.</p>
                        <div class="environment-cause-donate">
                            <div class="skillst">
                                <div class="sonny_progressbar" data-width="{{$percent}}"><p class="title"></p><div class="bar-container " style="background-color:#3f3932;height:8px;"><span class="backgroundBar"></span><span class="targetBar" style="width:{{$percent}}%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(156, 201, 0); opacity: 1; width: {{$percent}}%;"><small>{{$percent}}%</small></span></div></div>
                            </div>
                            <span class="color">Goal: ${{$donate->__get("target_money")}}</span>
                            <span>Raised: $ {{$donate->__get("raiser_money")}} /</span>

                        </div>
                        <div class="environment-section-heading"><h2><span>Cause Description</span></h2></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis purus nulla, at rhoncus elit non. Ut luct ac sagittis porttitor Suspendisse at orci ac us libero at laore ncus. Praesent fermentum lacus at nulla hendrerit facilisis. Ut ips us, mollis non solli citu ac sagittis porttitor.</p>
                        <p>Phasellus lobortis mattis dolor ac laoreet. Pellentesque feugiat scelerisque libero, et conllis cidunt at. Aen ac sagittis porttitor Suspendisse at orci ac ean inn luctus, felis in, luctus elit.</p>
                        <blockquote>Phasellus vitae ligula sodales, auctor orci quis, fermentm velit. Ut eu velit varius, ultrices eros in, fa ucibus arcu. Ut eget vestibulum odio, id ullamcorper arcu.</blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis purusla, at rhoncus elit non. Ut luct ac sagittis porttitor. Su spendisse at orci ac us libero at laore ncus. Praesent fermentum l at nulla hendrerit facilisis. Ut ips us, mollis non sollicitudin quis, lacinia a tellus.</p>
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
                    <div class="col-md-7">
                        <div class="environment-donation-section">
                            <form action="{{url("/save-money/{$donate->id}")}}" method="post">
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
                                            <button  class="environment-plan-btn" type="submit"> Donate Now</button>
                                        </div>
                                    </div>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="environment-prenxt-post">
                        <ul>
                            <li>
                                <div class="environment-prev-post">
                                    <figure><a href="404.html"><img src="{{asset("extra-images/post-img1.jpg")}}" alt=""></a></figure>
                                    <div class="environment-prev-artical">
                                        <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                        <a href="404.html" class="environment-post-arrow"><i class="fa fa-angle-left"></i> Previous Post</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="environment-next-post">
                                    <figure><a href="404.html"><img src="{{asset("extra-images/post-img2.jpg")}}" alt=""></a></figure>
                                    <div class="environment-next-artical">
                                        <h3><a href="404.html">Suspendisse id velit lectu Phasellus ipsum</a></h3>
                                        <a href="404.html" class="environment-post-arrow">Next Post <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="environment-section-heading"><h2><span>Cause Donors</span></h2></div>

                    <div class="environment-adminpost-slider slick-initialized slick-slider"><span class="slick-arrow-left slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
                        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 3392px; transform: translate3d(-848px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 848px;">
                                    <div class="environment-admin-post">
                                        <figure><img src="{{asset("extra-images/admin-post-img.jpg")}}" alt=""></figure>
                                        <section>
                                            <h5><a href="404.html" tabindex="-1">John Hamilton</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nunc dui. Curabitur dignissim luctus nisi id euismod. Donec tincid diam vel nibh euismod tempus.</p>
                                            <ul class="admin-post-option">
                                                <li>Member Since : <span>20 Feb 2017</span></li>
                                                <li>Amount : <span>$ 1100</span></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 848px;">
                                    <div class="environment-admin-post">
                                        <figure><img src="{{asset("extra-images/admin-post-img.jpg")}}" alt=""></figure>
                                        <section>
                                            <h5><a href="404.html" tabindex="0">John Hamilton</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nunc dui. Curabitur dignissim luctus nisi id euismod. Donec tincid diam vel nibh euismod tempus.</p>
                                            <ul class="admin-post-option">
                                                <li>Member Since : <span>20 Feb 2017</span></li>
                                                <li>Amount : <span>$ 1100</span></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 848px;">
                                    <div class="environment-admin-post">
                                        <figure><img src="{{asset("extra-images/admin-post-img.jpg")}}" alt=""></figure>
                                        <section>
                                            <h5><a href="404.html" tabindex="-1">John Hamilton</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nunc dui. Curabitur dignissim luctus nisi id euismod. Donec tincid diam vel nibh euismod tempus.</p>
                                            <ul class="admin-post-option">
                                                <li>Member Since : <span>20 Feb 2017</span></li>
                                                <li>Amount : <span>$ 1100</span></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 848px;">
                                    <div class="environment-admin-post">
                                        <figure><img src="{{asset("extra-images/admin-post-img.jpg")}}" alt=""></figure>
                                        <section>
                                            <h5><a href="404.html" tabindex="-1">John Hamilton</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nunc dui. Curabitur dignissim luctus nisi id euismod. Donec tincid diam vel nibh euismod tempus.</p>
                                            <ul class="admin-post-option">
                                                <li>Member Since : <span>20 Feb 2017</span></li>
                                                <li>Amount : <span>$ 1100</span></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div></div></div>

                        <span class="slick-arrow-right slick-arrow" style=""><i class="fa fa-angle-right"></i></span></div>


                    <div class="environment-section-heading"><h2><span>Related Cause</span></h2></div>
                    <div class="environment-cause environment-related-cause">
                        <ul class="row">
                            <li class="col-md-4">
                                <figure>
                                    <a href="cause-detail.html"><img src="{{asset("extra-images/cause-simple-grid1.jpg")}}" alt=""></a>
                                    <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                </figure>
                                <section>
                                    <h5><a href="cause-detail.html">Go Green Movement Donate For It</a></h5>
                                    <div class="skillst">
                                        <span class="color">Goal $ 5000</span>
                                        <span>Raised $ 2750</span>
                                        <div class="sonny_progressbar animate" data-width="63"><p class="title"></p><div class="bar-container " style="background-color:#3f3932;height:8px;"><span class="backgroundBar"></span><span class="targetBar" style="width:63%;background-color:#CCC;"></span><span class="bar" style="background-color:#9cc900;"><small>63%</small></span></div></div>
                                    </div>
                                </section>
                            </li>
                            <li class="col-md-4">
                                <figure>
                                    <a href="cause-detail.html"><img src="{{asset("extra-images/cause-simple-grid2.jpg")}}" alt=""></a>
                                    <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                </figure>
                                <section>
                                    <h5><a href="cause-detail.html">Go Green Movement Donate For It</a></h5>
                                    <div class="skillst">
                                        <span class="color">Goal $ 5000</span>
                                        <span>Raised $ 2750</span>
                                        <div class="sonny_progressbar animate" data-width="63"><p class="title"></p><div class="bar-container " style="background-color:#3f3932;height:8px;"><span class="backgroundBar"></span><span class="targetBar" style="width:63%;background-color:#CCC;"></span><span class="bar" style="background-color:#9cc900;"><small>63%</small></span></div></div>
                                    </div>
                                </section>
                            </li>
                            <li class="col-md-4">
                                <figure>
                                    <a href="cause-detail.html"><img src="{{asset("extra-images/cause-simple-grid3.jpg")}}" alt=""></a>
                                    <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                </figure>
                                <section>
                                    <h5><a href="cause-detail.html">Go Green Movement Donate For It</a></h5>
                                    <div class="skillst">
                                        <span class="color">Goal $ 5000</span>
                                        <span>Raised $ 2750</span>
                                        <div class="sonny_progressbar animate" data-width="63"><p class="title"></p><div class="bar-container " style="background-color:#3f3932;height:8px;"><span class="backgroundBar"></span><span class="targetBar" style="width:63%;background-color:#CCC;"></span><span class="bar" style="background-color:#9cc900;"><small>63%</small></span></div></div>
                                    </div>
                                </section>
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
                                <figure><a href="blog-detail.html"><img src="{{asset("extra-images/widget-post-img1.jpg")}}" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                <div class="environment-recentpost">
                                    <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                    <ul class="widget-post">
                                        <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                        <li><a href="blog-detail.html"> by John Billy</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <figure><a href="blog-detail.html"><img src="{{asset("extra-images/widget-post-img2.jpg")}}" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
                                <div class="environment-recentpost">
                                    <h6><a href="blog-detail.html">Ut eget vestibulum odi id ullamcorper arcu</a></h6>
                                    <ul class="widget-post">
                                        <li><time datetime="2008-02-14 20:00">20 Feb 2017 | </time></li>
                                        <li><a href="blog-detail.html"> by John Billy</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <figure><a href="blog-detail.html"><img src="{{asset("extra-images/widget-post-img3.jpg")}}" alt=""></a> <a href="blog-detail.html" class="environment-post-hover"><i class="fa fa-angle-double-right"></i></a> </figure>
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
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img1.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img1.jpg" alt=""></a></li>
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img2.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img2.jpg" alt=""></a></li>
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img3.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img3.jpg" alt=""></a></li>
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img4.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img4.jpg" alt=""></a></li>
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img5.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img5.jpg" alt=""></a></li>
                            <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img6.jpg")}}" class="fancybox"><img src="extra-images/widget-gallery-img6.jpg" alt=""></a></li>
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
