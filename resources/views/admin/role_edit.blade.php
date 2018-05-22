@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;" class="text-center">
            Role Management
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
                                <h3 class="box-title" style="font-size: 30px;">Edit Role</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            {!! Form::open(array('url' => 'admin/update_role/'.$role->id, 'method' => 'PUT')) !!}
                            {{Form::label('title','Role title:') }}
                            {{Form::text('title',$role->title, array('class' => 'form-control', 'placeholder' => 'Enter role title')) }}
                            <br>

                            {{Form::label('description','Role description:') }}
                            {{Form::text('description',$role->description, array('class' => 'form-control', 'placeholder' => 'Enter role description')) }}

                            <br>

                            {{Form::label('Permission','Permission :') }}
                            <br>
                            @foreach($all_per as $key => $value)
                                    <div class="col-sm-12">
                                        @if (in_array($value, $p))
                                            {{Form::checkbox($value->id,null, true) }}
                                        @else
                                            {{Form::checkbox($value->id,null) }}
                                         @endif
                                        {{Form::label($value->id,$value->name,array('style' => 'font-weight: normal; font-size: 16px;position: absolute; top: -1.5px; left: 40px;')) }}
                                    </div>
                                    <br>
                                <br>
                                @endforeach

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