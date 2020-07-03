@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">List Product</h4>
                            <p class="card-category"> Below is the total list of product</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Event ID</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->__get("id")}}</td>
                                            <td>{{$product->__get("name")}}</td>
                                            <td>{{$product->__get("price")}}</td>
                                            <td>{{$product->__get("event_id")}}</td>
                                            <td>
                                                <a href="{{url("admin/edit-product/{$product->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{url("admin/delete-product/{$product->__get("id")}")}}" method="post">
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

