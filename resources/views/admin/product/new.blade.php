@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW PRODUCT </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/save-product")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group">
                                            <label>Name Product</label>
                                            <input style="color:black;" type="text"  name="name" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 1</label>
                                            <input style="color:black;" type="text"  name="image1" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 2</label>
                                            <input style="color:black;" type="text"  name="image2" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 3</label>
                                            <input style="color:black;" type="text"  name="image3" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Image 4</label>
                                            <input style="color:black;" type="text"  name="image4" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Quanty</label>
                                            <input style="color:black;" type="number"  name="qty" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input style="color:black;" type="number"  name="price" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Event ID</label>
                                            <select style="color:black;" name="event_id" class="form-control">
                                                @foreach($events as $event)
                                                    <option value="{{$event->__get("id")}}">{{$event->__get("title")}}</option>
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


