@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">EDIT ORGANIZE </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/update-organize/{$organize->__get("id")}")}}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name Organize</label>
                                            <input  value="{{$organize->__get("name")}}" type="text" name="name" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Email Organize</label>
                                            <input value="{{$organize ->__get("email")}}" name="email" type="email" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Phone Organize</label>
                                            <input value="{{$organize ->__get("phone")}}" name="phone" type="number" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Address Organize</label>
                                            <input value="{{$organize ->__get("address")}}" name="address" type="text" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Client Id Organize</label>
                                            <input value="{{$organize ->__get("client_id")}}" name="client_id" type="number" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Secret Organize</label>
                                            <input value="{{$organize ->__get("secret")}}" name="secret" type="text" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Team Size Organize</label>
                                            <input value="{{$organize ->__get("team_size")}}" name="team_size" type="number" class="form-control" placeholder="...">
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


