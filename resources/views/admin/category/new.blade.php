@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW CATEGORY </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("/admin/save-category")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Title Category</label>
                                            <input  style="color:black;"  type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Url Category</label>
                                            <input style="color:black;" type="text" name="url" class="form-control" >
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


