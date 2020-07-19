@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">LIST CATEGORY</h4>
                            <p class="card-category"> Below is the total list of category</p>
                        </div>
                        <div class="card-header">
                            <a href="{{url("/admin/new-category")}}" class="float-right btn btn-primary">+</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr><th>
                                            ID
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Url
                                        </th>
                                        <th>Edit</th>
                                        <th>DELETE</th>
                                    </tr></thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->__get("id")}}</td>
                                                <td>{{$category->__get("title")}}</td>
                                                <td>{{$category->__get("url")}}</td>
                                                <td>
                                                    <a href="{{url("admin/edit-category/{$category->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                        <div class="ripple-container"></div></a>
                                                </td>
                                                <td>
                                                    <form action="{{url("admin/delete-category/{$category->__get("id")}")}}" method="post">
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


