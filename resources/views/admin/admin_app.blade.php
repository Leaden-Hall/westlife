<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Westlife | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/css_admin/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/css_admin/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/css_admin/_all-skins.min.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/admin/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>W</b>ES</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">WESTLIFE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('images/admin_avatar.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden -xs">{{session()->get('admin')->username}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('images/admin_avatar.jpg')}}" class="img-circle" alt="User Image">

                                <p>
                                    {{session()->get('admin')->username}} - Web Developer
                                    <small>{{session()->get('admin')->email}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/admin_avatar.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{session()->get('admin')->username}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                <li><a href="{{ URL::to('/admin/user') }}"><i class="fa fa-circle-o text-red"></i> <span>User</span></a></li>
                <li><a href="{{ URL::to('/admin/role') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Role</span></a></li>
                <li><a href="{{ URL::to('/admin/permission') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Permission</span></a></li>
                <li><a href="{{ URL::to('/admin/album') }}"><i class="fa fa-circle-o text-orange"></i> <span>Album</span></a></li>
                <li><a href="{{ URL::to('/admin/blog') }}"><i class="fa fa-circle-o text-fuchsia"></i> <span>Blog</span></a></li>
                <li><a href="{{ URL::to('/admin/subscription') }}"><i class="fa fa-circle-o text-green"></i> <span>Subscription</span></a></li>
                <li><a href="{{ URL::to('/admin/song') }}"><i class="fa fa-circle-o text-blue"></i> <span>Song</span></a></li>
                <li><a href="{{ URL::to('/admin/contact') }}"><i class="fa fa-circle-o text-purple"></i> <span>Contact</span></a></li>
                </li>
            </ul>

        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        @yield('admin_content')
    </div>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('/js_admin/dist/jquery.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/js_admin/bootstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('/js_admin/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/js_admin/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/js_admin/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/js_admin/demo.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>
