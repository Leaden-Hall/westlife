<style>
    .album-head {
        font-size:18px;
        font-weight:bold;
        margin-bottom: 10px;
    }
    .album-summary {
        font-size: 16px;
        text-align:justify;
        padding: 0px 40px;
        line-height: 30px
    }

    .devider {
        border-color: #CCC;
    }
</style>

@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;">
            Album <span style="color: #ff0003;">{{$album->title}}</span>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        @if(session()->get('UpdateAlbum') != null)
                            <div class="alert alert-success" style="margin: 20px 20px 20px 20px">
                                {{session()->get('UpdateAlbum')}}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <a class="btn btn-success"
                                   href="{{ URL::to('/admin/album/add') }}">Add new album</a>
                            </div>

                            <div class="col-sm-4 text-center">
                                <a class="btn btn-primary"
                                   href="{{ URL::to('/admin/album/edit/'.$album->id) }}">Edit this album</a>
                            </div>

                            <div class="col-sm-4 text-center">
                                <a class="btn btn-danger"
                                   href="{{ URL::to('/admin/album/delete/' . $album->id)}}"
                                   onclick="return confirm('Are you sure you want to delete this album?');">
                                    Delete this album</a>
                            </div>
                        </div>

                        <hr class="devider">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Released</th>
                                <th>Note</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>{{$album->id}}</td>
                                <td>{{$album->title}}</td>
                                <td>{{$album->released->toFormattedDateString()}}</td>
                                <td>{{$album->note}}</td>
                                <td>{{$album->created_at->toDayDateTimeString()}}</td>
                                @if($album->updated_at != null)
                                    <td>{{$album->updated_at->toDayDateTimeString()}}</td>
                                    @else
                                    <td></td>
                                @endif
                            </tr>
                            </tbody>
                        </table>

                        <hr class="devider">

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="text-center album-head ">Logo Image</div>
                                <figure>
                                    <img src="/images/{{$album->logo}}"
                                         alt="{{$album->title}}_logo"
                                         width="100%"
                                         class="d-block m-auto">
                                    <figcaption class="text-center">URL: <b>/images/{{$album->logo}}</b></figcaption>
                                </figure>
                            </div>
                            <div class="col-sm-9">
                                <div class="text-center album-head">Summary</div>

                                <p class="album-summary">{{$album->summary}}</p>
                            </div>
                        </div>

                        <hr class="devider">

                        <div>
                            <div class="text-center album-head ">Cover Image</div>
                            <figure>
                                <img src="/images/{{$album->cover}}"
                                     alt="{{$album->title}}_cover"
                                     width=100%>
                                <figcaption class="text-center">URL: <b>/images/{{$album->cover}}</b></figcaption>
                            </figure>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection