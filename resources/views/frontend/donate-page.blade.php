@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Donate</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Donate</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="environment-main-content">

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-cause environment-cause-simplegrid">
                            <ul class="row">
                                @foreach($donates as $donate)

                                    @php
                                        $f=$donate->__get("target_money");
                                        $s=$donate->__get("raiser_money");
                                        $percent=($s/$f)*100;
                                        if($percent>100){
                                            $percent=100;

                                        }
                                         if($percent<4){
                                            $percent=8;
                                        }
                                    @endphp
                                <li class="col-md-3">
                                    <figure>
                                        <a href="{{$donate->getDonateUrl()}}"><img src="{{$donate->getImage()}}" alt=""></a>
                                        <figcaption> <a href="{{$donate->getDonateUrl()}}">12 Donors</a> </figcaption>
                                    </figure>
                                    <section>
                                        <h5><a href="{{$donate->getDonateUrl()}}">Go Green Movement</a></h5>
                                        <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus </p>
                                        <a href="{{$donate->getDonateUrl()}}" class="environment-fancy-btn">Read More<span></span></a>
                                    </section>
                                    <div class="skillst">
                                        <div class="sonny_progressbar" data-width="{{$percent}}"><p class="title"></p><div class="bar-container " style="background-color:#3f3932;height:8px;"><span class="backgroundBar"></span><span class="targetBar" style="width:{{$percent}}%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(156, 201, 0); opacity: 1; width: {{$percent}}%;"><small>{{$percent}}%</small></span></div></div>
                                    </div>
                                    <div class="cause-simplegrid-bottom">
                                        <span>Raised $ {{$donate->__get("raiser_money")}}</span>
                                        <span>Goal $ {{$donate->__get("target_money")}}</span>
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
                </div>
            </div>
        </div>

    </div>
@endsection
