@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Subsciption management Table
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
                                <th>Email</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>trangds.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>minhfter.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>thanhnd1.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>thanhnd2.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>thanhnd3.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>thanhnd4.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>thanhnd5.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>thanhnd6.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>thanhnd7.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>thanhnd8.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>thanhnd9.dev@gmail.com</td>
                                <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                                <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                            </tr>

                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="sub_form.html" class="btn btn-success btn-lg" >Add</a>
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
@endsection