@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog detail</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Blog detail</li>
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
                        <figure class="environment-postthumb"><img src="{{asset("extra-images/blog-detail-img.jpg")}}" alt=""></figure>
                        <div class="environment-rich-editor">
                            <p>Ngày Trái Đất là sự kiện diễn ra hàng năm nhằm hướng tới một “Việt Nam không rác”. Mục tiêu sau cùng của chúng tôi là làm nên những biến đổi trong ý thức tập thể của người Việt Nam về việc xả rác bừa bãi bằng cách giáo dục và chủ động trong việc bảo vệ đất nước khỏi rác thải.</p>
                            <p>Diễn ra ít nhất ở năm 5 thành phố khắp Việt Nam là Thành phố Hồ Chí Minh, Hà Nội, Phú Quốc, Hội An và Huế. Tất cả tình nguyện viên (bao gồm các công ty, trường học, tổ chức xã hội và cá nhân) sẽ được cung cấp áo thun của Việt Nam Sạch & Xanh với logo của các tổ chức đồng hành, nhằm tạo nên một thông điệp thống nhất trong cộng đồng về việc giữ gìn Việt Nam sạch đẹp và không còn rác.</p>
                            <blockquote>Phasellus vitae ligula sodales, auctor orci quis, fermentm velit. Ut eu velit varius, ultrices eros in, fa ucibus arcu. Ut eget vestibulum odio, id ullamcorper arcu.</blockquote>
                            <p>Chúng tôi đề ra mục tiêu đánh vào nhận thức về thói quen xả rác và việc bảo vệ môi trường của ước tính 500.000 người qua các kênh trực tuyến và truyền thông xã hội. Hoạt động sẽ bắt đầu 08 tuần trước khi diễn ra Ngày Trái Đất trên trang Facebook của chúng tôi (hiện có hơn 16.000 người theo dõi), cùng với website, các đối tác truyền thông và báo chí.</p>
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
                        <div class="environment-section-heading"><h2><span>Related Posts</span></h2></div>

                        <div class="environment-blog environment-related-blog">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="#"><img src="{{asset("extra-images/related-blog-img1.jpg")}}" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                    <div class="environment-related-blog-text">
                                        <h4><a href="blog-detail.html">Phasellus vitae ligula</a></h4>
                                        <p>Lorem ipsum dolor sit amet,cons cing elit. Ut vestibulum.</p>
                                        <ul class="blog-grid-option blog-related-option">
                                            <li>
                                                <i class="fa fa-calendar-o"></i>
                                                <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i>
                                                <a href="blog-detail.html">By John Jack</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset("extra-images/related-blog-img2.jpg")}}" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                    <div class="environment-related-blog-text">
                                        <h4><a href="blog-detail.html">Eco environment green</a></h4>
                                        <p>Lorem ipsum dolor sit amet,cons cing elit. Ut vestibulum.</p>
                                        <ul class="blog-grid-option blog-related-option">
                                            <li>
                                                <i class="fa fa-calendar-o"></i>
                                                <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i>
                                                <a href="blog-detail.html">By John Jack</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="blog-detail.html"><img src="{{asset("extra-images/related-blog-img3.jpg")}}" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                    <div class="environment-related-blog-text">
                                        <h4><a href="blog-detail.html">Printing and typing</a></h4>
                                        <p>Lorem ipsum dolor sit amet,cons cing elit. Ut vestibulum.</p>
                                        <ul class="blog-grid-option blog-related-option">
                                            <li>
                                                <i class="fa fa-calendar-o"></i>
                                                <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                            </li>
                                            <li>
                                                <i class="fa fa-user"></i>
                                                <a href="blog-detail.html">By John Jack</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="comments-area">

                            <div class="environment-section-heading"><h2><span>Comments</span></h2></div>
                            <ul class="comment-list">
                                <li>
                                    <div class="thumb-list">
                                        <figure><img alt="" src="{{asset("extra-images/comment-img1.jpg")}}"></figure>
                                        <div class="text-holder">
                                            <h6>Taylor Sunny</h6>
                                            <time class="post-date" datetime="2008-02-14 20:00">February 17, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibum lacus in cursus rutrum. Ut vit ae sagittis felis. Nulla convallis neque ac sagittis porttitor.</p>
                                            <a class="comment-reply-link" href="#">Reply <i class="fa fa-share"></i></a>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div class="thumb-list">
                                                <figure><img alt="" src="{{asset("extra-images/comment-img2.jpg")}}"></figure>
                                                <div class="text-holder">
                                                    <h6>Jeans Morris</h6>
                                                    <time class="post-date" datetime="2008-02-14 20:00">February 17, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibum laus in cursus ae sagittis felis. Nulla convallis neque ac sagittis porttitor.</p>
                                                    <a class="comment-reply-link" href="#">Reply <i class="fa fa-share"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb-list">
                                                <figure><img alt="" src="{{asset("extra-images/comment-img3.jpg")}}"></figure>
                                                <div class="text-holder">
                                                    <h6>Lisa Jaquline</h6>
                                                    <time class="post-date" datetime="2008-02-14 20:00">February 17, 2017</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibum laus in cursus ae sagittis felis. Nulla convallis neque ac sagittis porttitor.</p>
                                                    <a class="comment-reply-link" href="#">Reply <i class="fa fa-share"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                </li>

                                <li>
                                    <div class="thumb-list">
                                        <figure><img alt="" src="{{asset("extra-images/comment-img4.jpg")}}"></figure>
                                        <div class="text-holder">
                                            <h6>Ricky David</h6>
                                            <time class="post-date" datetime="2008-02-14 20:00">February 17, 2017</time>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibum lacus in cursus rutrum. Ut vit ae sagittis felis. Nulla convallis neque ac sagittis porttitor.</p>
                                            <a class="comment-reply-link" href="#">Reply <i class="fa fa-share"></i></a>
                                        </div>
                                    </div>
                                </li>

                            </ul>


                            <div class="comment-respond">
                                <div class="environment-section-heading"><h2><span>Leave a Comment</span></h2></div>
                                <form>
                                    <p class="environment-full-form">
                                        <textarea name="comment" placeholder="Comment*" class="commenttextarea"></textarea>
                                        <i class="fa fa-comment"></i>
                                    </p>
                                    <p>
                                        <input type="text" value="Name*" onblur="if(this.value == '') { this.value ='Name*'; }" onfocus="if(this.value =='Name*') { this.value = ''; }">
                                        <i class="fa fa-user"></i>
                                    </p>
                                    <p>
                                        <input type="text" value="Email*" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }">
                                        <i class="fa fa-envelope"></i>
                                    </p>
                                    <p>
                                        <input type="text" value="Website*" onblur="if(this.value == '') { this.value ='Website*'; }" onfocus="if(this.value =='Website*') { this.value = ''; }">
                                        <i class="fa fa-globe"></i>
                                    </p>
                                    <p class="form-submit"><input name="submit" class="submit" value="Submit" type="submit"> <input name="comment_post_ID" value="99" id="comment_post_ID" type="hidden">
                                    </p>
                                </form>
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
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img1.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img1.jpg")}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img2.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img2.jpg")}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img3.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img3.jpg")}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img4.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img4.jpg")}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img5.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img5.jpg")}}" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="{{asset("extra-images/widget-gallery-img6.jpg")}}" class="fancybox"><img src="{{asset("extra-images/widget-gallery-img6.jpg")}}" alt=""></a></li>
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
