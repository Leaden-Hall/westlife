@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;" class="text-center">
            Permission Management
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
                                <h3 class="box-title" style="font-size: 30px;">Add Permission</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            {!! Form::open(array('url' => 'admin/save_permission', 'method' => 'POST')) !!}
                            {{Form::label('name','Permission name:') }}
                            {{Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Enter permission name')) }}
                            <br>

                            {{Form::label('description','Permission description:') }}
                            {{Form::text('description',null, array('class' => 'form-control', 'placeholder' => 'Enter permission description')) }}

                            <br>
                            <br>
                            <div class="text-center">
                                {{Form::submit('Add to database', array('class' => 'btn btn-success btn-lg')) }}
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