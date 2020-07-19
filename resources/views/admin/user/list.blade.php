@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">List User</h4>
                            <p class="card-category"> Below is the total list of user</p>
                        </div>
                        <div class="card-header">
                            <a href="{{url("/admin/users/new")}}" class="float-right btn btn-primary">+</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>role</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->__get("id")}}</td>
                                            <td>{{$user->__get("name")}}</td>
                                            <td>{{$user->__get("email")}}</td>
                                            <td>
                                                @if($user->__get("role_id") == 1)
                                                    <a class="btn btn-danger btn-sm text-white">Admin</a>
                                                @elseif($user->__get("role_id") == 2)
                                                    <a class="btn btn-info btn-sm text-white">User Account</a>
                                                @elseif($user->__get("role_id") == 3)
                                                    <a class="btn btn-success btn-sm text-white">Event Manager</a>
                                                @elseif($user->__get("role_id") == 4)
                                                    <a class="btn btn-dark btn-sm text-white">Article Manager</a>
                                                @elseif($user->__get("role_id") == 5)
                                                    <a class="btn btn-success btn-sm text-white">Product Manager</a>
                                                @elseif($user->__get("role_id") == 6)
                                                    <a class="btn btn-success btn-sm text-white">Program Manager</a>
                                                @elseif($user->__get("role_id") == 6)
                                                    <a class="btn btn-danger btn-sm text-white">Dead Active</a>
                                                @endif
{{--                                                {{$user->__get("rolename")}}</td>--}}
                                            <td>
                                                <a href="{{url("admin/users/edit/{$user->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{url("admin/users/delete/{$user->__get("id")}")}}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-primary btn-round">Delete<div class="ripple-container"></div></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


