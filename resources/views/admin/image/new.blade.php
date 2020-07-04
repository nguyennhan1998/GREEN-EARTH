@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">NEW IMAGE </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("/admin/save-image")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputFile">Url Image</label>
                                            <input type="text" name="name" class="form-control" placeholder="...">
                                        </div>
                                        <div class="form-group">
                                            <label>Article Id</label>
                                            <select name="article_id" class="form-control">
                                                @foreach($articles as $article)
                                                    <option value="{{$article->__get("id")}}">{{$article->__get("title")}}</option>
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


