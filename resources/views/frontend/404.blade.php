@extends("frontend.layout")
@section("content")
    <div class="environment-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Error 404</h1>
                </div>
                <div class="col-md-12">
                    <ul class="environment-breadcrumb">
                        <li><a href="/">Homepage</a></li>
                        <li class="active">Error 404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="environment-main-content environment-error-page">
        <span class="environment-error-transparent"></span>

        <div class="environment-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="environment-error-wrap">
                            <h2>Error <span>4<i class="fa fa-frown-o"></i>4</span></h2>
                            <span>Page Not Found !</span>
                            <p>Sorry The Page You Are Looking For Have Been Removed, Had Its Name Changed, Or Is Temporarily Unavailable.</p>
                            <div class="clearfix"></div>
                            <form>
                                <input type="text" value="Enter Your Keywords" onblur="if(this.value == '') { this.value ='Enter Your Keywords'; }" onfocus="if(this.value =='Enter Your Keywords') { this.value = ''; }">
                                <label>
                                    <input type="submit" value="Search">
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

