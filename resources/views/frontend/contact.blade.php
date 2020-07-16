@extends("frontend.layout")
@section("content")

    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-title-wrap">
                            <div class="environment-fancy-title"><h2>OUR <span> MAP</span></h2></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p>
                        </div>
                        <div class="environment-location-map"><div id="map"></div></div>
                    </div>
                    <div class="col-md-12">
                        <div class="environment-title-wrap">
                            <div class="environment-fancy-title"><h2>Contact <span> Us</span></h2></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="environment-contactus-info">
                            <ul class="row">
                                <li class="col-md-12">
                                    <span><i class="fa fa-phone"></i></span>
                                    <div class="environment-contactus-text">
                                        <h5>Call Us At</h5>
                                        <p>(123) 45 678</p>
                                        <p>+987 65 42</p>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <div class="environment-contactus-text">
                                        <h5>Mail Us At</h5>
                                        <p><a href="https://eyecix.com/cdn-cgi/l/email-protection#d4bab5b9b194b1b9b5bdb8fab7bbb9"><span class="__cf_email__" data-cfemail="acc5c2cac3ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</span></a></p>
                                        <p><a href="404.html"><span class="__cf_email__" data-cfemail="c1a4a2ae81a0a3a2efa2aeac">[email&#160;protected]</span></a></p>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <div class="environment-contactus-text">
                                        <h5>Our Location</h5>
                                        <p>Salford road, east London, UK</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="environment-contact-form">
                            <form method="post" class="myform" action="https://eyecix.com/html/ecoenvironment/process-form.php">
                                <ul>
                                    <li>
                                        <input value="Name*" onblur="if(this.value == '') { this.value ='Name*'; }" onfocus="if(this.value =='Name*') { this.value = ''; }" type="text" name="name">
                                        <i class="fa fa-user"></i>
                                    </li>
                                    <li>
                                        <input value="Email*" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }" type="text" name="email">
                                        <i class="fa fa-envelope"></i>
                                    </li>
                                    <li class="full-input">
                                        <textarea name="message" placeholder="Message*"></textarea>
                                        <i class="fa fa-comment"></i>
                                    </li>
                                    <li class="full-input">
                                        <label><input value="Send" name="submit" type="submit"></label>
                                        <span class="output_message"></span>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-title-wrap">
                            <div class="environment-fancy-title"><h2>our<span> Partners</span></h2></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p>
                        </div>

                        <div class="environment-partner-slider">
                            <div> <a href="404.html"><img src="extra-images/partner-logo-1.jpg" alt=""></a> </div>
                            <div> <a href="404.html"><img src="extra-images/partner-logo-2.jpg" alt=""></a> </div>
                            <div> <a href="404.html"><img src="extra-images/partner-logo-3.jpg" alt=""></a> </div>
                            <div> <a href="404.html"><img src="extra-images/partner-logo-4.jpg" alt=""></a> </div>
                            <div> <a href="404.html"><img src="extra-images/partner-logo-5.jpg" alt=""></a> </div>
                            <div> <a href="404.html"><img src="extra-images/partner-logo-3.jpg" alt=""></a> </div>
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
