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
                            <div class="box-header with-border text-center">
                                <h3 class="box-title" style="font-size: 30px;">Add New Album</h3>
                            </div>

                            <form role="form" action="" method="POST">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="form-group col-sm-4">
                                            <label for="Title">Title</label>
                                            <input type="text" class="form-control" id="Title" placeholder="Title">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="Released">Released</label>
                                            <input type="date" class="form-control" id="Released">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="Note">Note</label>
                                            <input type="text" class="form-control" id="Note" placeholder="Note">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-sm-4">
                                            <label class="custom-file-label" for="logo">Logo</label>
                                            <input type="file" id="logo"
                                                   accept="image/gif, image/jpeg, image/png"
                                                   onchange="readLogo(this);">
                                            <img id="logoPreview" src="#" alt="logo"
                                                 style="display:none;margin-top:10px">
                                        </div>
                                    
                                        <div class="form-group col-sm-8">
                                            <label for="summary">Summary</label>
                                            <textarea name="summary" class="form-control" id="summary"
                                                      placeholder="Enter album summary" rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row" style="margin-top:300px">
                                        <div class="form-group col-sm-6">
                                            <label for="uploadCover">Upload new Cover</label>
                                            <input type="file" accept="image/gif, image/jpeg, image/png"
                                                   onchange="readCover(this);"
                                                   id="uploadCover">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="galleryCover">Select from gallery</label>
                                            <select name="albumCover" id="galleryCover" class="form-control" onchange="readCover(this);">
                                                @foreach($gallery->images as $image)
                                                    <option value="http://westlife.com/images/{{$gallery->name}}/{{$image->url}}">{{$image->caption}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <img id="coverPreview" src="#" alt="logo" style="display:none;margin-top:10px">

                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="text-center">
                                    <button type="reset" class="btn btn-default btn-lg" onclick="clearImage();">Reset</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-success btn-lg">Add</button>
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

        function readCover(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#coverPreview')
                        .attr('src', e.target.result)
                        .width('100%')
                        .height('100%')
                        .css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function clearImage() {
            $('#logoPreview').css('display', 'none');
            $('#coverPreview').css('display', 'none');
        }
    </script>
@endsection