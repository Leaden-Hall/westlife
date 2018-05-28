@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 class="text-center" style="font-size: 40px;">
            Contact Management
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-body">
                        <div class="col-md-6 col-md-offset-3 well">
                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Response Contact</h3>
                            </div>

                            {!! Form::open(array('url' => 'admin/response_contact/'.$contact->id, 'method' => 'POST')) !!}
                            {{Form::label('name','Contact name:') }}
                            {{Form::text('name',$contact->name, array('class' => 'form-control', 'disabled')) }}
                            <br>
                            {{Form::label('email','Contact email:') }}
                            {{Form::text('email',$contact->email, array('class' => 'form-control', 'disabled')) }}
                            <br>
                            {{Form::label('ask','Contact Message:') }}
                            {{Form::textarea('ask',$contact->message, array('class' => 'form-control','rows'=>'4', 'disabled' => true)) }}
                            <br>
                            {{Form::label('response','Response:') }}
                            {{Form::textarea('response',null, array('class' => 'form-control', 'placeholder' => 'Enter message','rows'=>'4')) }}
                            <br>
                            {{Form::label('sign','Your Signature:') }}
                            {{Form::text('sign',$user->username, array('class' => 'form-control', 'placeholder' => 'Enter signature')) }}
                            <br>
                            <div class="text-center">
                                {{Form::submit('Send to user', array('class' => 'btn btn-success btn-lg')) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection