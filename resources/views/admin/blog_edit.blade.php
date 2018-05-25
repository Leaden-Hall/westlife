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

                    @if(count($errors) > 0)
                        <div class="alert alert-danger" style="margin:20px">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style="font-size: 18px">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="box-body">
                        <div class="col-md-6 col-md-offset-3 well">
                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Edit Post</h3>
                            </div>

                            {!! Form::open(array('url' => 'admin/update_blog/'.$blog->id, 'method' => 'POST', 'enctype'=>'multipart/form-data')) !!}
                            {{Form::label('title','Title') }}
                            {{Form::text('title',null, array('class' => 'form-control', 'placeholder' => $blog->title)) }}
                            <br>
                            {{Form::label('summary','Summary') }}
                            {{Form::textarea('summary',$blog->summary, array('class' => 'form-control', 'placeholder' => 'Enter summary','rows'=>'4')) }}
                            <br>
                            {{Form::label('content','Content') }}
                            {{Form::textarea('content',$blog->content, array('class' => 'form-control', 'placeholder' => 'Enter content')) }}
                            <br>
                            {{Form::label('content','Logo') }}
                            {{Form::file('logo', array('class' => 'form-control-file', 'onchange' => 'readLogo(this)', 'accept' => 'image/gif, image/jpeg, image/png')) }}
                            <br>

                            <div id="logoURL">URL: {{$blog->logo}}</div>
                            <img id="logoPreview" src="/images/{{$blog->logo}}" alt="logo" width="100%">



                            <div class="text-center" style="margin-top: 20px">
                                {{Form::submit('Update', array('class' => 'btn btn-success btn-lg')) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function readLogo(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                $('#logoURL').css('display', 'none');

                reader.onload = function (e) {

                    $('#logoPreview')
                        .attr('src', e.target.result)
                        .css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection