@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Album management Table
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
                                <th>ID</th>
                                <th>Title</th>
                                <th>Logo</th>
                                <th>Summary</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($albums as $album)
                            <tr>
                                <td>{{$album->id}}</td>
                                <td>{{$album->title}}</td>
                                <td>
                                    <figure>
                                        <img src="/images/{{$album->logo}}" width="100%" alt="{{$album->title}}">
                                    </figure>
                                </td>
                                <td>{{$album->summary}}</td>
                                <td><a href="{{ URL::to('/admin/album/view/' . $album->id)}}" class="btn btn-info">Detail</a></td>
                                <td><a href="" class="btn btn-danger" >Delete</a></td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="text-center">
                            <a class="btn btn-success btn-lg" href="{{ URL::to('/admin/album/add') }}">Add</a>
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