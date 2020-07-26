@extends("frontend.layout")
@section("content")

    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blogs</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Blogs</li>
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
                        <div class="environment-blog environment-blog-medium">
                            <ul class="row">
                                @foreach($articles as $article)
                                <li class="col-md-6">
                                    <div class="environment-blog-medium-wrap">
                                        <figure><a href="{{$article->getArticleUrl()}}"><img src="{{$article->getImage()}}"
                                                                                alt=""><i class="fa fa-link"></i></a>
                                        </figure>
                                        <section>
                                            @php $start_at = strtotime($article->__get("updated_at"));
                                                     $datestart = date('j-F-Y',$start_at);


                                            @endphp
                                            <h5><a href="{{$article->getArticleUrl()}}">{{$article->__get("title")}}</a></h5>
                                            <ul class="blog-grid-option">
                                                <li>
                                                    <i class="fa fa-calendar-o"></i>
                                                    <time datetime="2008-02-14 20:00">{{$datestart}}</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user"></i>
                                                    <a href="{{$article->getArticleUrl()}}">By {{$article->User->__get("name")}}</a>
                                                </li>
                                            </ul>
                                            <p>{{$article->__get("description")}}</p>
                                            <a href="{{$article->getArticleUrl()}}" class="environment-fancy-btn">Read
                                                More<span></span></a>
                                        </section>
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
