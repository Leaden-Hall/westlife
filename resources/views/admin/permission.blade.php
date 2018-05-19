@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Permission management Table
            <small>Create, Read, Update, Delete</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>User managerment</td>
                                <td>Lorem Ipsum is simply dummy text </td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Album managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Blog managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Blog managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Blog managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Blog managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Blog managerment</td>
                                <td>Lorem Ipsum is simply dummy text</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            </tbody>
                        </table>
                        <div class="text-center">
                            <a class="btn btn-success btn-lg" href="{{ URL::to('/admin/permission/form') }}">Add</a>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection