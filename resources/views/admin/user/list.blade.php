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
                            <div class="row">
                                <div class="col-md-6">
                                    @if(session()->has('message'))
                                        <div class="alert alert-warning">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
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
                                    @foreach($news as $new)
                                        @if(count($new)==1)
                                            <tr>
                                                <td>{{$new[0]->user_id}}</td>
                                                <td>{{$new[0]->users_name}}</td>
                                                <td>{{$new[0]->email}}</td>
                                                <td>
                                                 @if($new[0]->name == "admin")
                                                <a class="btn btn-danger">Admin</a>
                                                        @elseif($new[0]->name == "user")
                                                        <a class="btn btn-success">User</a>
                                                    @elseif($new[0]->name == "admin_article")
                                                        <a class="btn btn-info">Admin article</a>
                                                    @elseif($new[0]->name == "admin_event")
                                                        <a class="btn btn-primary">Admin Event</a>
                                                        @endif
                                                </td>
                                                <td></td>
                                                <td>
                                                <td>
                                                    <a href="{{url("admin/users/edit/{$new[0]->user_id}")}}" class="btn btn-primary btn-round">Edit
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{url("admin/users/delete/{$new[0]->user_id}")}}" method="post">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-primary btn-round">Delete<div class="ripple-container"></div></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @elseif(count($new)==2)
                                        @for($i=0;$i<count($new)-1;$i++)
                                                <tr>
                                                    <td>{{$new[0]->user_id}}</td>
                                                    <td>{{$new[0]->users_name}}</td>
                                                    <td>{{$new[0]->email}}</td>
                                                    <td>@if($new[$i]->name == "admin")
                                                            <a class="btn btn-danger">Admin</a>
                                                        @elseif($new[$i]->name == "user")
                                                            <a class="btn btn-success">User</a>
                                                        @elseif($new[$i]->name == "admin_article")
                                                            <a class="btn btn-info">Admin article</a>
                                                        @elseif($new[$i]->name == "admin_event")
                                                            <a class="btn btn-primary">Admin Event</a>
                                                        @endif
                                                        @if($new[$i+1]->name == "admin")
                                                            <a class="btn btn-danger">Admin</a>
                                                        @elseif($new[$i+1]->name == "user")
                                                            <a class="btn btn-success">User</a>
                                                        @elseif($new[$i+1]->name == "admin_article")
                                                            <a class="btn btn-info">Admin article</a>
                                                        @elseif($new[$i+1]->name == "admin_event")
                                                            <a class="btn btn-primary">Admin Event</a>
                                                        @endif</td>
                                                    <td></td>
                                                    <td>
                                                    <td>
                                                        <a href="{{url("admin/users/edit/{$new[0]->user_id}")}}" class="btn btn-primary btn-round">Edit
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{url("admin/users/delete/{$new[0]->user_id}")}}" method="post">
                                                            @method("DELETE")
                                                            @csrf
                                                            <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-primary btn-round">Delete<div class="ripple-container"></div></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        @endfor
                                        @elseif(count($new)==3)

                                                @for($i=0;$i<count($new)-1;$i++)
                                                    @if(!empty($new[$i+2]))
                                                    <tr>
                                                        <td>{{$new[0]->user_id}}</td>
                                                        <td>{{$new[0]->users_name}}</td>
                                                        <td>{{$new[0]->email}}</td>
                                                        <td>
                                                            @if($new[$i]->name == "admin")
                                                                <a class="btn btn-danger">Admin</a>
                                                            @elseif($new[$i]->name == "user")
                                                                <a class="btn btn-success">User</a>
                                                            @elseif($new[$i]->name == "admin_article")
                                                                <a class="btn btn-info">Admin article</a>
                                                            @elseif($new[$i]->name == "admin_event")
                                                                <a class="btn btn-primary">Admin Event</a>
                                                            @endif
                                                            @if($new[$i+1]->name == "admin")
                                                                <a class="btn btn-danger">Admin</a>
                                                            @elseif($new[$i+1]->name == "user")
                                                                <a class="btn btn-success">User</a>
                                                            @elseif($new[$i+1]->name == "admin_article")
                                                                <a class="btn btn-info">Admin article</a>
                                                            @elseif($new[$i+1]->name == "admin_event")
                                                                <a class="btn btn-primary">Admin Event</a>
                                                            @endif
                                                                @if($new[$i+2]->name == "admin")
                                                                    <a class="btn btn-danger">Admin</a>
                                                                @elseif($new[$i+2]->name == "user")
                                                                    <a class="btn btn-success">User</a>
                                                                @elseif($new[$i+2]->name == "admin_article")
                                                                    <a class="btn btn-info">Admin article</a>
                                                                @elseif($new[$i+2]->name == "admin_event")
                                                                    <a class="btn btn-primary">Admin Event</a>
                                                                @endif</td>
                                                        <td></td>
                                                        <td>
                                                        <td>
                                                            <a href="{{url("admin/users/edit/{$new[0]->user_id}")}}" class="btn btn-primary btn-round">Edit
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <form action="{{url("admin/users/delete/{$new[0]->user_id}")}}" method="post">
                                                                @method("DELETE")
                                                                @csrf
                                                                <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-primary btn-round">Delete<div class="ripple-container"></div></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endfor


                                                @endif

                                    @endforeach
                                    </tbody>
                                </table>
                                {{--                                                @if($user->__get("role_id") == 1)--}}

                                {{--                                                @elseif($user->__get("role_id") == 2)--}}

                                {{--                                                @elseif($user->__get("role_id") == 3)--}}
                                {{--                                                  --}}
                                {{--                                                @elseif($user->__get("role_id") == 4)--}}
                                {{--                                                    <a class="btn btn-dark btn-sm text-white">Article Manager</a>--}}
                                {{--                                                @elseif($user->__get("role_id") == 5)--}}
                                {{--                                                    <a class="btn btn-success btn-sm text-white">Product Manager</a>--}}
                                {{--                                                @elseif($user->__get("role_id") == 6)--}}
                                {{--                                                    <a class="btn btn-success btn-sm text-white">Program Manager</a>--}}
                                {{--                                                @elseif($user->__get("role_id") == 6)--}}
                                {{--                                                    <a class="btn btn-danger btn-sm text-white">Dead Active</a>--}}
                                {{--                                                @endif--}}
                                {{--                                                {{$user->__get("rolename")}}</td>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


