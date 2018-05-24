@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Blog management Table
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
                                {{--<th>Number</th>--}}
                                <th>Title</th>
                                <th>Summary</th>
                                <th>Content</th>
                                <th>Publisher</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $key => $value)
                                <tr>
                                    {{--<td>1</td>--}}
                                    <td>{{ str_limit($value->title, $limit = 15, $end = '...')  }}</td>
                                    <td>{{ str_limit($value->summary, $limit = 20, $end = '...')  }}</td>
                                    <td>{{ str_limit($value->content, $limit = 20, $end = '...')  }}</td>
                                    <td>{{ $value->published_by  }}</td>
                                    <td ><a class="btn btn-info" href="{{ URL::to('/admin/edit_blog/'.$value->id) }}">Edit</a>
                                    <td ><a href="{{ URL::to('/admin/delete_blog/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete this blog?');" class="btn btn-danger">Delete</a>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="{{ URL::to('/admin/blog/form') }}" class="btn btn-success btn-lg" >Add</a>
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

    {{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalLabel">Hi, {{ Auth::user()->username }}!</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--Do you really want to delete this lesson?--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-danger">Delete</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection