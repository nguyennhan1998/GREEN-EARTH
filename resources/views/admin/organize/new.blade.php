@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW ORGANIZE</h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/save-organize")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name Organize</label>
                                            <input type="text"  name="name" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Email Organize</label>
                                            <input type="email" name="email" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Phone Organize</label>
                                            <input type="number" name="phone" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Address Organize</label>
                                            <input type="text" name="address" class="form-control" placeholder="...">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Client Id Organize</label>
                                            <input type="number" name="client_id" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Secret Organize</label>
                                            <input type="text" name="secret" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Team Size Organize</label>
                                            <input type="number" name="team_size" class="form-control" placeholder="...">
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


