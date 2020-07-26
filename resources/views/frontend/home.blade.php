@extends("frontend.layout")
@section("content")
    <div class="environment-banner">
        @if(session()->has('message'))
            <div class="alert alert-warning">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="environment-banner-one">
            <div class="environment-banner-one-layer">
                <img src="{{asset("extra-images/banner-1.jpg")}}" alt="">
                <div class="environment-banner-caption">
                    <div class="container">
                        <div class="banner-caption-text">
                            <h1>
                                <span>The Earth Is</span>
                                What We Have
                                <span>In Common</span>
                            </h1>
                            <p>Environmental protection is the protection of the natural environment of individuals,
                                organizations and the government. Its goal is to preserve the existing natural
                                resources and environment and, if possible, to repair damage and create the opposite trend.
                            </p>
                            <a href="#" class="environment-bgcolor">Get A Quote</a>
                        </div>
                        <div class="banner-thumb">
                            <img src="{{asset("extra-images/banner-thumb-1.png")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="environment-banner-one-layer">
                <img src="{{asset("extra-images/banner-2.jpg")}}" alt="">
                <div class="environment-banner-caption">
                    <div class="container">
                        <div class="banner-caption-text">
                            <h1>
                                <span>The Earth Is</span>
                                What We HAve
                                <span>In Common</span>
                            </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ven eros et iaculis. Vivamus volutpat hendrerit elementum.Integerl ultrices vestibulum leo eu.</p>
                            <a href="#" class="environment-bgcolor">Get A Quote</a>
                        </div>
                        <div class="banner-thumb">
                            <img src="{{asset("extra-images/banner-thumb-1.png")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="environment-main-content">

        <div class="environment-main-section environment-minus-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enviroment-services-strip">
                            <ul class="row">
                                <li class="col-md-3">
                                    <h2 class="enviroment-heading"><span>Recycle</span> For All Its Worth</h2>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-three3"></i>
                                    <h2><span>The</span> GOOD</h2>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-three3"></i>
                                    <h2><span>The</span><br> BEST</h2>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-three3"></i>
                                    <h2><span>The</span> BETTER</h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-services-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="enviroment-services enviroment-simple-services">
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="enviroment-services-left">
                                        <span><i class="icon-flash"></i></span>
                                        <section>
                                            <h5><a href="#">Energy</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="enviroment-services-right">
                                        <span><i class="icon-nature3"></i></span>
                                        <section>
                                            <h5><a href="#">Organic</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="enviroment-services-left">
                                        <span><i class="icon-technology9"></i></span>
                                        <section>
                                            <h5><a href="#">Solar Lights</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="enviroment-services-right">
                                        <span><i class="icon-arrows10"></i></span>
                                        <section>
                                            <h5><a href="#">Recycle</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="enviroment-services-left">
                                        <span><i class="icon-nature-1"></i></span>
                                        <section>
                                            <h5><a href="#">Eco ideas</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="enviroment-services-right">
                                        <span><i class="icon-nature-2"></i></span>
                                        <section>
                                            <h5><a href="#">Biology</a></h5>
                                            <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                        </section>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-counter-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Every day 8,000 <span> Volunteers</span></h2></div>
                        <div class="environment-counter">
                            <ul class="row">
                                <li class="col-md-3">
                                    <i class="icon-null"></i>
                                    <span id="word-count1">2,200</span>
                                    <small>Volunteers</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="fa fa-heart-o"></i>
                                    <span id="word-count2">780</span>
                                    <small>Days of help</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-signs4"></i>
                                    <span id="word-count3">3,500</span>
                                    <small>people saved</small>
                                </li>
                                <li class="col-md-3">
                                    <i class="icon-money3"></i>
                                    <span id="word-count4">10,000</span>
                                    <small>funds collected</small>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros
                                etiaculis. Vivamus volutpat hendrerit elementum.</p>
                            <div class="clearfix"></div>
                            <a href="/donate" class="environment-donate-btn">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section">
            <div class="container-fluid">
                <div class="environment-fancy-title"><h2>our<span> Projects</span></h2></div>
                <div class="environment-project environment-modren-project">
                    <ul class="row">
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img1.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img2.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img3.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img4.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img5.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img6.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img7.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-3">
                            <figure>
                                <a href="project-detail.html"><img src="extra-images/project-gallery-img8.jpg"
                                                                   alt=""></a>
                                <figcaption>
                                    <span class="environment-top-bottom-border"></span>
                                    <div class="environment-gallery-text">
                                        <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus
                                            rutm. Ut vitae</p>
                                        <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-blog-grid-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Latest <span> News</span></h2></div>
                        <div class="environment-blog environment-blog-grid">
                            <ul class="row">
                                @foreach($articles as $article)
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="extra-images/blog-grid-img-1.jpg"
                                                                            alt=""><i class="fa fa-share-square-o"></i></a>
                                    </figure>
                                    <div class="environment-blog-grid-text">
                                        <h4><a  href="blog-detail.html">{{$article->__get("title")}}</a></h4>
                                        <p>{{$article->__get("description")}}</p>
                                        <ul class="blog-grid-option">
                                            <li>
                                                <i class="fa fa-calendar-o"></i>
                                                <time>
                                                    @php $start_at = strtotime($article->__get("created_at"));

                                            $datestart = date('Y-m-d',$start_at);


                                                    @endphp
                                                    {{$datestart}}</time>

                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i>
                                                <a href="#">320</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i>
                                                <a href="#">By {{$article->User->__get("name")}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                    @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-modren-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Upcoming <span>Events</span></h2></div>
                        <div class="environment-event environment-modren-event">
                            <ul class="row">
                                @foreach($events as $event)
                                <li class="col-md-12">
                                    <figure>
                                        @php $start_at = strtotime($event->__get("start_at"));
                                                     $datestart = date('g:i A',$start_at);
                                                     $end_at = strtotime($event->__get("end_at"));
                                                     $dateend = date('g:i A',$end_at);
                                                     $mydate=date("d M",$end_at);

                                        @endphp
                                        <a href="event-detail.html"><img src="{{$event->getImage()}}"
                                                                         alt=""><i class="fa fa-share-square-o"></i></a>
                                        <time datetime="2008-02-14 20:00">{{$mydate}}</time>
                                    </figure>
                                    <div class="environment-modren-event-text">
                                        <h3><a href="event-detail.html">{{$event->__get("title")}}</a></h3>
                                        <ul class="environment-event-option">
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                Time:
                                                <time datetime="2008-02-14 20:00">

                                                    {{$datestart}} - {{$dateend}}</time>
                                            </li>
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                Location :
                                                <p>{{$event->Organize->__get("address")}}</p>
                                            </li>
                                        </ul>
                                        <p>{{$event->__get("description")}}</p>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                            <a href="event-detail.html" class="modren-event-btn">More Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-donate-sectionfull">
            <span class="donate-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="environment-section-text">
                            <h2>Our Company is An End-to-End Mid stream At</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing varius diam ac ipsuelit ut Nulla
                                convallis neque</p>
                            <a href="404.html" class="environment-simple-btn">Get A quote <span></span></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="environment-donate-form">
                            <h2>Make A <span>Donation</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vesbulumla us in cursus
                                rutrum. Ut vitae sagittis felis.</p>
                            <form>
                                <ul>
                                    <li>
                                        <input type="text" value="Name*"
                                               onblur="if(this.value == '') { this.value ='Name*'; }"
                                               onfocus="if(this.value =='Name*') { this.value = ''; }"></li>
                                    <li>
                                        <input type="text" value="Phone*"
                                               onblur="if(this.value == '') { this.value ='Phone*'; }"
                                               onfocus="if(this.value =='Phone*') { this.value = ''; }"></li>
                                    <li>
                                        <input type="text" value="Email*"
                                               onblur="if(this.value == '') { this.value ='Email*'; }"
                                               onfocus="if(this.value =='Email*') { this.value = ''; }"></li>
                                    <li>
                                        <input type="text" value="Website*"
                                               onblur="if(this.value == '') { this.value ='Website*'; }"
                                               onfocus="if(this.value =='Website*') { this.value = ''; }"></li>
                                    <li class="environment-select-form">
                                        <div class="environment-select-two">
                                            <select>
                                                <option value="">Select Your Campaign</option>
                                                <option value="pakistan">Campaign</option>
                                                <option value="india">Campaign</option>
                                                <option value="usa">Campaign</option>
                                                <option value="student">Campaign</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="environment-select-form">
                                        <div class="environment-select-two">
                                            <select>
                                                <option value="">Select Your Amount</option>
                                                <option value="pakistan">Select Amount</option>
                                                <option value="india">Select Amount</option>
                                                <option value="usa">Select Amount</option>
                                                <option value="student">Select Amount</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li><label><input type="submit" value="Donate Now"></label></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section environment-cause-gridfull">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Our Recent <span>Causes</span></h2></div>
                        <div class="environment-cause environment-cause-simplegrid">
                            <ul class="row">
                                <li class="col-md-3">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid1.jpg"
                                                                         alt=""></a>
                                        <figcaption><a href="cause-detail.html">12 Donors</a></figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Go Green Movement</a></h5>
                                        <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum
                                            lacus </p>
                                        <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                    </section>
                                    <div class="skillst">
                                        <div class="progressbar1" data-width="63" data-target="63"></div>
                                    </div>
                                    <div class="cause-simplegrid-bottom">
                                        <span>Raised $ 2750</span>
                                        <span>Goal $ 5000</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid2.jpg"
                                                                         alt=""></a>
                                        <figcaption><a href="cause-detail.html">12 Donors</a></figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Give Them Education</a></h5>
                                        <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum
                                            lacus </p>
                                        <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                    </section>
                                    <div class="skillst">
                                        <div class="progressbar1" data-width="63" data-target="63"></div>
                                    </div>
                                    <div class="cause-simplegrid-bottom">
                                        <span>Raised $ 2750</span>
                                        <span>Goal $ 5000</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid3.jpg"
                                                                         alt=""></a>
                                        <figcaption><a href="cause-detail.html">12 Donors</a></figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Help In Planting Trees</a></h5>
                                        <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum
                                            lacus </p>
                                        <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                    </section>
                                    <div class="skillst">
                                        <div class="progressbar1" data-width="63" data-target="63"></div>
                                    </div>
                                    <div class="cause-simplegrid-bottom">
                                        <span>Raised $ 2750</span>
                                        <span>Goal $ 5000</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid4.jpg"
                                                                         alt=""></a>
                                        <figcaption><a href="cause-detail.html">12 Donors</a></figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Go Green Movement</a></h5>
                                        <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum
                                            lacus </p>
                                        <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                    </section>
                                    <div class="skillst">
                                        <div class="progressbar1" data-width="63" data-target="63"></div>
                                    </div>
                                    <div class="cause-simplegrid-bottom">
                                        <span>Raised $ 2750</span>
                                        <span>Goal $ 5000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-fancy-title"><h2>Our <span>Shop</span></h2></div>
                        <div class="environment-shop environment-shop-grid shop-grid-slider">
                            <div class="environment-shop-border">
                                <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img1.jpg" alt=""><i
                                            class="fa fa-shopping-cart"></i></a></figure>
                                <div class="environment-shop-grid-text">
                                    <h4><a href="shop-detail.html">Black Ninja T-Shirt</a></h4>
                                    <div class="star-rating"><span class="star-rating-box" style="width:58%"></span>
                                    </div>
                                    <span class="environment-shop-cartbox">
<del>$30.00</del>
$ 19.00
</span>
                                </div>
                            </div>
                            <div class="environment-shop-border">
                                <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><i
                                            class="fa fa-shopping-cart"></i></a></figure>
                                <div class="environment-shop-grid-text">
                                    <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                    <div class="star-rating"><span class="star-rating-box" style="width:58%"></span>
                                    </div>
                                    <span class="environment-shop-cartbox">
<del>$30.00</del>
$ 19.00
</span>
                                </div>
                            </div>
                            <div class="environment-shop-border">
                                <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img3.jpg" alt=""><i
                                            class="fa fa-shopping-cart"></i></a></figure>
                                <div class="environment-shop-grid-text">
                                    <h4><a href="shop-detail.html">Ship Idea T-Shirt</a></h4>
                                    <div class="star-rating"><span class="star-rating-box" style="width:58%"></span>
                                    </div>
                                    <span class="environment-shop-cartbox">
<del>$30.00</del>
$ 19.00
</span>
                                </div>
                            </div>
                            <div class="environment-shop-border">
                                <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img4.jpg" alt=""><i
                                            class="fa fa-shopping-cart"></i></a></figure>
                                <div class="environment-shop-grid-text">
                                    <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                    <div class="star-rating"><span class="star-rating-box" style="width:58%"></span>
                                    </div>
                                    <span class="environment-shop-cartbox">
<del>$30.00</del>
$ 19.00
</span>
                                </div>
                            </div>
                            <div class="environment-shop-border">
                                <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><i
                                            class="fa fa-shopping-cart"></i></a></figure>
                                <div class="environment-shop-grid-text">
                                    <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                    <div class="star-rating"><span class="star-rating-box" style="width:58%"></span>
                                    </div>
                                    <span class="environment-shop-cartbox">
<del>$30.00</del>
$ 19.00
</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
