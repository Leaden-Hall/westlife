@extends('admin/admin_app')

@section('admin_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center" style="font-size: 35px;">
            Role management Table
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
                                <th>Description</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($roles as $key => $value)
                            <tbody>
                            <tr>
                                <td>{{ str_limit($value->id)  }}</td>
                                <td>{{ str_limit($value->title)  }}</td>
                                <td>{{ str_limit($value->description)  }}</td>
                                <td ><a href="{{ URL::to('/admin/edit_role/'.$value->id) }}" class="btn btn-info" style="width:50%">Edit</a>
                                <td><a href="{{ URL::to('/admin/delete_role/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete this role?');" class="btn btn-danger">Delete</a>
                                {{--{{ Form::open(array('url' => 'delete_role/' . $value->id, 'id'=>'form')) }}--}}
                                {{--{{ Form::hidden('_method', 'post') }}--}}
                                {{--{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}--}}
                                {{--{{ Form::close() }}</td>--}}
                                {{--{!! Form::open(array('url' => 'save_role', 'method' => 'POST')) !!}--}}
                                {{--{{Form::submit('Delete', array('class' => 'btn btn-danger')) }}--}}
                                {{--{!! Form::close() !!}--}}
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="{{ URL::to('/admin/role/form') }}" class="btn btn-success btn-lg" >Add</a>
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

    {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$('#del').onclick(function(e){--}}
                {{--e.preventDefault();--}}
                {{--url = $(this).parent().attr('action');--}}
                {{--BootstrapDialog.confirm('Are you sure you want to delete?', function(result){--}}
                    {{--if(result) {--}}
                        {{--$.ajax(url);--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}

        {{--});--}}
    {{--</script>--}}
@endsection