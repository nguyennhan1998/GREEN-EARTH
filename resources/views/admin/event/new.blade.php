@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW EVENT </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                            <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>
                            <script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script>

                            @include('ckfinder::setup')      
                            <script>
                                CKFinder.setupCKEditor();
                                CKEDITOR.replace( 'summary-ckeditor', {
                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                    filebrowserUploadMethod: 'form'
                                });    
                            </script>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


