@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">EDIT USER </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/users/update/{$user->__get("id")}")}}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">name</label>
                                            <input style="color:black;" value="{{$user->__get("name")}}" style="color: black;font-size: 16px" type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input style="color:black;" value="{{$user->__get("email")}}"  style="color: black;font-size: 16px" type="email" name="email" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating text-capitalize">give permission</label><br>
                                            @foreach($roles as $role)
                                                <label for="role_id">{{$role->name}}</label>
                                                <input type="radio" name="role_name" value="{{$role->id}}" id="role_id">
                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating text-capitalize">disable permission</label><br>
                                            @foreach($roles as $role)
                                                <label for="role_id">{{$role->name}}</label>
                                                <input type="radio" name="role_delete" value="{{$role->id}}" id="role_id">
                                            @endforeach
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


