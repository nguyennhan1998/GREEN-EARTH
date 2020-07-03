@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">Danh sách sự kiện </h4>
                            <p class="card-category"> Dưới đây là  tổng danh sách các sự kiện môi trường</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Content</th>
                                            <th>Start At</th>
                                            <th>End At</th>
                                            <th>Total Money</th>
                                            <th>Organization ID</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{$event->__get("id")}}</td>
                                        <td>{{$event->__get("title")}}</td>
                                        <td>{{$event->__get("description")}}</td>
                                        <td>{{$event->__get("content")}}</td>
                                        <td>{{$event->__get("start_at")}}</td>
                                        <td>{{$event->__get("end_at")}}</td>
                                        <td>{{$event->__get("total_money")}}</td>
                                        <td>{{$event->__get("organization_id")}}</td>
                                        <td>
                                            <a href="{{url("edit-event/{$event->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                <div class="ripple-container"></div></a>
                                        </td>
                                        <td>
                                            <form action="{{url("delete-event/{$event->__get("id")}")}}" method="post">
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

