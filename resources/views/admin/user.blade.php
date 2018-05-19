@extends('admin/admin_app')

@section('admin_content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User management Table
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>thanh</td>
                            <td>thanhnguyenduy.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Minh</td>
                            <td>Minh.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Hai</td>
                            <td>Hai.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Vinh</td>
                            <td>Vinh.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Tu</td>
                            <td>Tu.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>trung</td>
                            <td>trung.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Dinh</td>
                            <td>Dinh.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>ha</td>
                            <td>ha.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>thanh</td>
                            <td>thanh.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>trang</td>
                            <td>trang.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>thanh</td>
                            <td>thanhnguyenduy.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>thanh</td>
                            <td>thanhnguyenduy.dev@gmail.com</td>
                            <td ><form><input type=submit class="btn btn-info" value="Edit" style="width:50%">
                            <td ><form><input type=submit class="btn btn-danger" value="Delete" style="width:50%">
                        </tr>


                        </tbody>
                    </table>
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