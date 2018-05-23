@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 class="text-center" style="font-size: 40px;">
            Contact Management
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
                                <h3 class="box-title" style="font-size: 30px;">Contact response form</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            {!! Form::open(array('url' => 'admin/response_contact/'.$contact->id, 'method' => 'POST')) !!}
                            {{Form::label('name','User name:') }}
                            {{Form::text('name',$contact->name, array('class' => 'form-control', 'disabled')) }}
                            <br>
                            {{Form::label('email','User email:') }}
                            {{Form::text('email',$contact->email, array('class' => 'form-control', 'disabled')) }}
                            <br>
                            {{Form::label('sign','Signature:') }}
                            {{Form::text('sign',$contact->email, array('class' => 'form-control', 'placeholder' => 'Enter signature')) }}
                            <br>
                            {{Form::label('message','Response message:') }}
                            {{Form::textarea('message',null, array('class' => 'form-control', 'placeholder' => 'Enter message','rows'=>'4')) }}
                            <br>
                            <div class="text-center">
                                {{Form::submit('Send to user', array('class' => 'btn btn-success btn-lg')) }}
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