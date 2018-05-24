@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px; " class="text-center">
            Blog Management
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-6 col-md-offset-3 well">
                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Edit Blog</h3>
                            </div>

                            {!! Form::open(array('url' => 'admin/save_blog', 'method' => 'POST', 'enctype'=>'multipart/form-data')) !!}
                            {{Form::label('title','Blog title:') }}
                            {{Form::text('title',$blog->title, array('class' => 'form-control', 'placeholder' => 'Enter title')) }}
                            <br>
                            {{Form::label('summary','Blog summary:') }}
                            {{Form::textarea('summary',$blog->summary, array('class' => 'form-control', 'placeholder' => 'Enter summary','rows'=>'4')) }}
                            <br>
                            {{Form::label('content','Blog content:') }}
                            {{Form::textarea('content',$blog->content, array('class' => 'form-control', 'placeholder' => 'Enter content')) }}
                            <br>
                            {{Form::label('content','Blog content:') }}
                            {{Form::file('logo', array('class' => 'form-control-file')) }}
                            <br>
                            <div class="text-center">
                                {{Form::submit('Update to database', array('class' => 'btn btn-success btn-lg')) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection