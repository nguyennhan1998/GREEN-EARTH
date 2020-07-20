@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">LIST ARTICLE</h4>
                            <p class="card-category">Below is the total list of article</p>
                        </div>
                        <div class="card-header">
                            <a href="{{url("/admin/articles/new")}}" class="float-right btn btn-primary">+</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
{{--                                        <th>Content</th>--}}
                                        <th>Category ID</th>
                                        <th>Event ID</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $article)
                                        <tr>
                                            <td>{{$article->__get("id")}}</td>
                                            <td>{{$article->__get("title")}}</td>
                                            <td>{{$article->__get("description")}}</td>
{{--                                            <td>@php--}}
{{--                                                    $doc = new DOMDocument();--}}
{{--                                                    $doc->loadHTML($article->__get("content"));--}}
{{--                                                 echo $doc->saveHTML();--}}
{{--                                                @endphp</td>--}}
                                            <td>{{$article->__get("category_id")}}</td>
                                            <td>{{$article->__get("event_id")}}</td>
                                            <td>
                                                <a href="{{url("admin/articles/edit/{$article->__get("id")}")}}" class="btn btn-primary btn-round">Edit
                                                    <div class="ripple-container"></div></a>
                                            </td>
                                            <td>
<<<<<<< HEAD
                                                <form action="{{url("admin/articles/delete/{$article->__get("id")}")}}" method="post">
=======
                                                <form action="{{url("admin/users/delete/{$article->__get("id")}")}}" method="post">
>>>>>>> 195e1dbe3152a8c4df5eca4e16d46cc547ca394b
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

