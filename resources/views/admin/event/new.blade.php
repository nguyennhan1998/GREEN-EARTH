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
                                <table class="table table-hover">
                                    <form role="form" action="{{url("/admin/save-event")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="text" name="image" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label id="content">Content</label>
                                            <textarea class="form-control" id="summary-ckeditor" name="content"></textarea>
                                            @include('ckfinder::setup')

                                            <script>
                                                CKFinder.setupCKEditor();
                                                CKEDITOR.replace( 'summary-ckeditor', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Start At</label>
                                            <input  type="text" name="start_at" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>End At</label>
                                            <input type="text" name="end_at" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Total Money</label>
                                            <input type="number" name="total_money" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Organization Id</label>
                                            <select type="text" name="organization_id" class="form-control">
                                                @foreach($organizations as $organize)
                                                    <option value="{{$organize->__get("id")}}">{{$organize->__get("title")}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


