@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Song management Table
            <small>Create, Read, Update, Delete</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @if(session()->get('addSong') != null)
                        <div class="alert alert-success" style="margin: 20px">
                            {{session()->get('addSong')}}
                        </div>

                    @elseif(session()->get('deleteSong') != null)
                        <div class="alert alert-success" style="margin: 20px">
                            {{session()->get('deleteSong')}}
                        </div>
                    @endif



                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Album</th>
                                <th>File Storage</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($songs as $song)
                            <tr>
                                <td>{{$song->id}}</td>
                                <td>{{$song->name}}</td>
                                <td>{{$song->album->title}}</td>
                                <td>albums/{{$song->album->title}}/{{$song->url}}</td>
                                <td>
                                    <div class="text-sm-center">
                                        <a href="{{ URL::to('/admin/song/edit/'.$song->id) }}" class="btn btn-primary">Edit</a>
                                    </div>

                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="{{ URL::to('/admin/song/delete/'.$song->id) }}" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this song?');">Delete</a>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="{{ URL::to('/admin/song/add') }}" class="btn btn-success btn-lg">Add New Song</a>
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