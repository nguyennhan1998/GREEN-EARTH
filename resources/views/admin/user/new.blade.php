@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW USER </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("/admin/users/save")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">name</label>
                                            <input style="color:black;" type="text" class="form-control" style="color: black;font-size: 16px" name="name">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input style="color:black;" type="email" name="email" style="color: black;font-size: 16px" class="form-control">
                                        </div>
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">password</label>
                                            <input style="color:black;" type="password" name="password" style="color: black;font-size: 16px" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label type="integer" class="bmd-label-floating">give role</label>
                                            <select>
                                                @foreach($roles as $role)
                                                <input type="checkbox" name="checkbox[]" value="{{$role->id}}"/>
                                                    <label for="role_name">{{$role->name}}</label>
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


