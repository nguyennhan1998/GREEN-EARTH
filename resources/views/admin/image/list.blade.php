@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">List Image</h4>
                            <p class="card-category"> Below is the total list of image</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Article id</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr>
                                            <td>{{$image->__get("id")}}</td>
                                            <td><img src="{{$image->__get('name')}}" width="50" height="50"/></td>
                                            <td>{{$image->__get("article_id")}}</td>
                                            <td>
                                                <a href="{{url("admin/edit-image/{$image->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{url("admin/delete-image/{$image->__get("id")}")}}" method="post">
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

