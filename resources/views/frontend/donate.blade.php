@extends("frontend.layout")
@section("content")
{{--    <div class="environment-subheader">--}}
{{--        <span class="subheader-transparent"></span>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h1>Donation</h1>--}}
{{--                </div>--}}
{{--                <div class="col-md-12">--}}
{{--                    <ul class="environment-breadcrumb">--}}
{{--                        <li><a href="index-2.html">Homepage</a></li>--}}
{{--                        <li>Donation</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="environment-donation-section">
                            <div class="environment-section-heading"><h2><span>Select Donation Amount</span></h2></div>
                            <ul>
                                <li class="current">
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 10.00</span></h4>
                                        <p>Pack 1 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 20.00</span></h4>
                                        <p>Pack 2 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 30.00</span></h4>
                                        <p>Pack 3 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 40.00</span></h4>
                                        <p>Pack 4 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 50.00</span></h4>
                                        <p>Pack 5 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="donation-wrap">
                                        <h4>Donate: <span>$ 60.00</span></h4>
                                        <p>Pack 6 : 3 Books And 3 Pencils</p>
                                    </div>
                                </li>
                                <li class="add-amount">
                                    <div class="environment-section-heading"><h2><span>Enter Custom Amount</span></h2></div>
                                    <div class="environment-add-amount">
                                        <input value="Enter Here*" onblur="if(this.value == '') { this.value ='Enter Here*'; }" onfocus="if(this.value =='Enter Here*') { this.value = ''; }" type="text">
                                        <label>
                                            <input value="Donate Now" type="submit">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="environment-section-heading"><h2><span>Related Cause</span></h2></div>
                        <div class="environment-cause environment-related-cause">
                            <ul class="row">
                                <li class="col-md-6">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid1.jpg" alt=""></a>
                                        <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Go Green Eco Movement Donate For It</a></h5>
                                        <div class="skillst">
                                            <span class="color">Goal $ 5000</span>
                                            <span>Raised $ 2750</span>
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                    </section>
                                </li>
                                <li class="col-md-6">
                                    <figure>
                                        <a href="cause-detail.html"><img src="extra-images/cause-simple-grid2.jpg" alt=""></a>
                                        <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="cause-detail.html">Go Green Eco Movement Donate For It</a></h5>
                                        <div class="skillst">
                                            <span class="color">Goal $ 5000</span>
                                            <span>Raised $ 2750</span>
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-5">
                        <div class="environment-section-heading"><h2><span>Donate Now</span></h2></div>
                        <div class="environment-Donation-form">
                            <form>
                                <ul>
                                    <li><p>Personal Info:</p></li>
                                    <li>
                                        <input type="text" value="First Name*" onblur="if(this.value == '') { this.value ='First Name*'; }" onfocus="if(this.value =='First Name*') { this.value = ''; }">
                                        <i class="fa fa-user"></i>
                                    </li>
                                    <li>
                                        <input type="text" value="Lats Name*" onblur="if(this.value == '') { this.value ='Lats Name*'; }" onfocus="if(this.value =='Lats Name*') { this.value = ''; }">
                                        <i class="fa fa-user"></i>
                                    </li>
                                    <li>
                                        <input type="text" value="Email*" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }">
                                        <i class="fa fa-envelope"></i>
                                    </li>
                                    <li>
                                        <input type="text" value="Phone*" onblur="if(this.value == '') { this.value ='Phone*'; }" onfocus="if(this.value =='Phone*') { this.value = ''; }">
                                        <i class="fa fa-phone"></i>
                                    </li>
                                    <li><p>Address:</p></li>
                                    <li>
                                        <div class="environment-select-two">
                                            <select>
                                                <option value="">Country*</option>
                                                <option value="pakistan">counter name</option>
                                                <option value="india">counter name</option>
                                                <option value="usa">counter name</option>
                                                <option value="student">counter name</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="environment-select-two">
                                            <select>
                                                <option value="">State*</option>
                                                <option value="pakistan">state name</option>
                                                <option value="india">state name</option>
                                                <option value="usa">state name</option>
                                                <option value="student">state name</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="environment-select-two">
                                            <select>
                                                <option value="">City*</option>
                                                <option value="pakistan">city name</option>
                                                <option value="india">city name</option>
                                                <option value="usa">city name</option>
                                                <option value="student">city name</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li><p>Card Info:</p></li>
                                    <li>
                                        <input type="text" value="Card Number*" onblur="if(this.value == '') { this.value ='Card Number*'; }" onfocus="if(this.value =='Card Number*') { this.value = ''; }">
                                    </li>
                                    <li>
                                        <input type="text" value="Street Address*" onblur="if(this.value == '') { this.value ='Street Address*'; }" onfocus="if(this.value =='Street Address*') { this.value = ''; }">
                                    </li>
                                    <li>
                                        <input type="text" value="DD / MM / YYYY" onblur="if(this.value == '') { this.value ='DD / MM / YYYY'; }" onfocus="if(this.value =='DD / MM / YYYY') { this.value = ''; }">
                                    </li>
                                    <li><label><input type="submit" value="Submit"></label></li>
                                </ul>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
