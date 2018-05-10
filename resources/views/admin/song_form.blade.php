@extends('admin/admin_app')

@section('admin_content')
    <section class="content-header">
        <h1 style="font-size: 40px;">
            Song Management
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
                                <h3 class="box-title" style="font-size: 30px;">Add Song</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Song name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="album">Song album</label>
                                        <input type="text" class="form-control" id="album" placeholder="Enter album">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">Song url</label>
                                        <input type="text" class="form-control" id="url" placeholder="Enter url">
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