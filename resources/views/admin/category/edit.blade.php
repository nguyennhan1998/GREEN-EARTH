@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">EDIT CATEGORY </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("/admin/update-category/{$category->__get("id")}")}}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title Category</label>
                                            <input style="color:black;"  value="{{$category->__get("title")}}" type="text" name="title" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Url Category</label>
                                            <input style="color:black;" value="{{$category->__get("url")}}" name="url" type="text" class="form-control" placeholder="...">
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


