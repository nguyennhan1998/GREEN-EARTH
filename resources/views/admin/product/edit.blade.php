@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW PRODUCT </h4>
                            <p class="card-category">------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/update-product/{$products->__get("id")}")}}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group">
                                            <label>Name Product</label>
                                            <input value="{{$products->__get("name")}}" type="text"  name="name" class="form-control" placeholder="Name...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image1</label>
                                            <input value="{{$products->__get("image1")}}" type="text" name="image1" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image2</label>
                                            <input value="{{$products->__get("image2")}}" type="text" name="image2" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image3</label>
                                            <input value="{{$products->__get("image3")}}" type="text" name="image3" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image4</label>
                                            <input value="{{$products->__get("image4")}}" type="text" name="image4" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Qty</label>
                                            <input value="{{$products->__get("qty")}}" type="number"  name="qty" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input value="{{$products->__get("price")}}" type="number"  name="price" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Event ID</label>
                                            <select name="event_id" class="form-control">
                                                @foreach($events as $event)
                                                    <option value="{{$event->__get("id")}}">{{$event->__get("event_id")}}</option>
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

