@extends("frontend.layout")
@section("content")
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