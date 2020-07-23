@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Images</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Images</li>
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
                        <div class="environment-gallery environment-masonery-gallery">
                            <ul class="row">
                                @foreach($image as $i)
                                <li class="col-md-3">
                                    <figure>
                                        <a data-fancybox-group="group" href="#" class="fancybox"><img src="{{$i->getImage()}}" alt=""><i class="icon-signs23"></i></a>
                                        <figcaption>
                                            <span class="environment-top-bottom-border"></span>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
