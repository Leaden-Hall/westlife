@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;">
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
                                <h3 class="box-title" style="font-size: 30px;">Add Blog</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Blog title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="summary">Blog summary</label>
                                        <input type="text" class="form-control" id="summary" placeholder="Enter summary">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Blog content</label>
                                        <textarea class="form-control" name="content" id="content" placeholder="Enter content" cols="20" rows="7"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="publisher">Blog publisher</label>
                                        <input type="text" class="form-control" id="publisher" placeholder="Enter publisher">
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success btn-lg" >Add to database</button>
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
@endsection