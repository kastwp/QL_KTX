<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ</title>
    <LINK REL="SHORTCUT ICON"  HREF="/admin_assets/dist/img/Logo_Dai_hoc_Can_Tho.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin_assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">   
                <li class="nav-item">
                    <a class="dropdown-item" href="logout" >
                        <i class="bi bi-box-arrow-right"></i>
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>                
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-2 position-fixed">
            <!-- Brand Logo -->
            <a href="/user/index" class="brand-link">
                <img src="/admin_assets/dist/img/Logo_Dai_hoc_Can_Tho.png" alt="CTU Logo" class="brand-image " style="opacity: .8">
                <span class="brand-text font-weight-light"> KTX Đại Học Cần Thơ</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar"> 
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/user/thongtincanhan" class="nav-link">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>
                                    Thông tin cá nhân
                                </p>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a href="/user/dangkynoitru" class="nav-link">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>
                                    Đăng Ký Nội Trú KTX
                                </p>
                            </a>
                        </li>            
                        <li class="nav-item">
                                <a href="/user/dangkychuyenphong" class="nav-link">
                                <i class="nav-icon fas fa-people-carry"></i>
                                <p>
                                    Đăng Ký Chuyển Phòng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/traphong" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Trả Phòng
                                    </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/user/thongtinphong" class="nav-link">
                                <i class="nav-icon fas fa-house-user"></i>
                                    <p>
                                        Thông tin Phòng Đang Ở
                                    </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/thongbao" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                    <p>
                                        Xem Thông Báo
                                    </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user/ykien" class="nav-link">
                                <i class="nav-icon fas fa-comment-alt"></i>
                                    <p>
                                        Gửi ý kiến phản ánh
                                    </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @section('container')
                    @show

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin_assets/dist/js/adminlte.min.js"></script>
</body>
</html>
