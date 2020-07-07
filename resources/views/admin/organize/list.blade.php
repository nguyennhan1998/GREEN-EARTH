@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">LIST ORGANIZE</h4>
                            <p class="card-category"> Below is the total list of businesses</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Client_id</th>
                                        <th>Secret</th>
                                        <th>Team_size</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($organizations as $organize)
                                        <tr>
                                            <td>{{$organize->__get("id")}}</td>
                                            <td>{{$organize->__get("name")}}</td>
                                            <td>{{$organize->__get("email")}}</td>
                                            <td>{{$organize->__get("phone")}}</td>
                                            <td>{{$organize->__get("address")}}</td>
                                            <td>{{$organize->__get("client_id")}}</td>
                                            <td>{{$organize->__get("secret")}}</td>
                                            <td>{{$organize->__get("team_size")}}</td>
                                            <td>
                                                <a href="{{url("admin/edit-organize/{$organize->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{url("admin/delete-organize/{$organize->__get("id")}")}}" method="post">
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

