@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;">
            Album Management
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="well">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li style="font-size: 18px;">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Edit Album <span class="text-danger">{{$album->title}}</span></h3>
                            </div>

                            <form role="form" action="{{ URL::to('admin/album/edit/' .$album->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-row" style="margin-bottom: 100px" >
                                        <div class="form-group col-sm-4">
                                            <label for="Title">Title</label>
                                            <input type="text" class="form-control" id="Title" placeholder="{{$album->title}}" name="title">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="Released">Released</label>
                                            <input type="date" class="form-control" id="Released" name="released" value="{{$album->released->toDateString()}}" required>
                                        </div>


                                        <div class="form-group col-sm-4">
                                            <label for="Note">Note</label>
                                            <input type="text" class="form-control" id="Note" name="note" value="{{$album->note}}">
                                        </div>
                                    </div>

                                    <div class="form-row" style="margin-bottom: 350px" >
                                        <div class="form-group col-sm-4">
                                            <label class="custom-file-label" for="logo">Logo</label>
                                            <input type="file" id="logo"
                                                   accept="image/gif, image/jpeg, image/png"
                                                   onchange="readLogo(this);" name="logo">
                                            <span id="editlogo">{{$album->logo}}</span><br>
                                            <img id="logoPreview" src="/images/{{$album->logo}}" alt="logo" width="150px" height="150px"
                                                 style="margin-top:10px">
                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label for="summary">Summary</label>
                                            <textarea name="summary" class="form-control" id="summary"
                                                      rows="7" required>{{$album->summary}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="uploadCover">Upload new Cover</label>
                                            <input type="file" accept="image/gif, image/jpeg, image/png"
                                                   onchange="readUploadCover(this);"
                                                   id="uploadCover" name="newCover">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="galleryCover">Select from gallery</label>
                                            <select name="defaultCover" id="galleryCover" class="form-control" onchange="readCover();">
                                                <option value="none">-- Please Select --</option>
                                                @foreach($gallery->images as $image)
                                                    <option value="{{$image->url}}">{{$image->caption}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class ="editCover">{{$album->cover}}</div>
                                        <img class="editCover" src="/images/{{$album->cover}}" alt="editCover" width="100%">
                                        <img id="coverUpload" src="#" alt="CoverImage" style="display:none;margin-top:10px">
                                        <img id="coverPreview" src="#" alt="CoverImage" style="display:none;margin-top:10px">

                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="text-center">
                                    <a href="{{ URL::to('admin/album/view/'.$album->id) }}" class="btn btn-default btn-lg">Cancel</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-warning btn-lg">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <script type="text/javascript">
        function readLogo(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                $('#editlogo').css('display', 'none');
                reader.onload = function (e) {

                    $('#logoPreview')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150)
                        .css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readUploadCover(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                $('#coverPreview').css('display', 'none');
                $('.editCover').css('display', 'none');
                $('#galleryCover').val("#galleryCover option:first");

                reader.onload = function (e) {

                    $('#coverUpload')
                        .attr('src', e.target.result)
                        .width('100%')
                        .height('100%')
                        .css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readCover() {
            if($('#galleryCover').val() == 'none') {
                $('.editCover').css('display', 'block');
                $('#coverPreview').attr('src', '').css('display', 'none');
            }else {
                $('.editCover').css('display', 'none');
                var prefix = '/images/';
                var coverImage = prefix + $('#galleryCover').val();
                $('#coverUpload').css('display', 'none');
                $('#uploadCover').val("");
                $('#coverPreview')
                    .attr('src', coverImage)
                    .width('100%')
                    .height('100%')
                    .show();
            }
        }

        function clearImage() {
            $('#logoPreview').css('display', 'none');
            $('#coverPreview').css('display', 'none');
            $('#coverUpload').css('display', 'none');
        }
    </script>
@endsection