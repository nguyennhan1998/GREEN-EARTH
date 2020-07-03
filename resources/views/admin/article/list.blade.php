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
                                    <tr><th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                        </th>
                                        <th></th>
                                    </tr></thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            <a href="#pablo" class="btn btn-primary btn-round">Edit
                                                <div class="ripple-container"></div></a>
                                        </td>
                                        <td>
                                            <a href="#pablo" class="btn btn-primary btn-round">Delete
                                                <div class="ripple-container"></div></a>
                                        </td>

                                    </tr>
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

