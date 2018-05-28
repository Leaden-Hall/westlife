@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;">
            Song Management
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    @if(count($errors) > 0)
                        <div class="alert alert-danger" style="margin: 20px">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style="font-size: 18px;">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="box-body">
                        <div class="col-md-6 col-md-offset-3 well">
                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Add Song</h3>
                            </div>

                            <form role="form" method="POST" action="{{URL::to('/admin/song/add')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Song name" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="album">Album</label>
                                        <select name="album" id="album" class="form-control">
                                            <option value="">-- Choose an album --</option>
                                            @foreach($albums as $album)
                                            <option value="{{$album->id}}">{{$album->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="path">Upload</label>
                                        <input type="file" id="path" accept="audio/mpeg" name="upload">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-lg">Add</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection