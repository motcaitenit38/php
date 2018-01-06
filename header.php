<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- <link rel="stylesheet" href="assets/css/dung.css"/> -->
    <link rel="stylesheet" href="assets/css/truong.css">
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
   
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  .welll {
    min-height: 11px;
    /* padding: 19px; */
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  }
      .auto-style1 {
          min-height: 20px;
          padding: 19px;
          margin-bottom: 20px;
          background-color: #f5f5f5;
          border: 1px solid #e3e3e3;
          border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
          text-align: left;
      }
      .auto-style2 {
          min-height: 20px;
          padding: 19px;
          margin-bottom: 20px;
          background-color: #f5f5f5;
          border: 1px solid #e3e3e3;
          border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
          text-align: justify;
      }
  </style>
</head>

<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
            </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Người tìm việc <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-1" class="collapse">
                            
                            <li><a href="home.php"><i class="fa fa-angle-double-right"></i> Giao diện trang chủ</a></li>
                            <li><a href="ketqua.php"><i class="fa fa-angle-double-right"></i> Trang kết quả tìm kiếm</a></li>
                            <li><a href="nguoitimviecdangky.php"><i class="fa fa-angle-double-right"></i> Người tìm việc đăng ký</a></li>
                            <li><a href="chitietcongviec.php"><i class="fa fa-angle-double-right"></i> Trang chi tiết 1 công việc</a></li>
                            <li><a href="thamgiacongviec.php"><i class="fa fa-angle-double-right"></i> Giao diện ứng tuyển công việc</a></li>
                            <li><a href="hosoungtuyen.php"><i class="fa fa-angle-double-right"></i> Giao diện hồ sơ đã ứng tuyển</a></li>
                            <li><a href="sosanhungvien.php"><i class="fa fa-angle-double-right"></i> So sánh ứng viên cùng ứng tuyển</a></li>
                            <li><a href="congviecquantam.php"><i class="fa fa-angle-double-right"></i> Công việc đã quan tâm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Người tuyển dụng <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-2" class="collapse">
                            <li><a href="dangkytuyendung.php"><i class="fa fa-angle-double-right"></i> Đăng ký tuyển dụng</a></li>
                            <li><a href="timhoso.php"><i class="fa fa-angle-double-right"></i> tìm hồ sơ doanh nghiệp</a></li>
                            <li><a href="ketquatimhoso.php"><i class="fa fa-angle-double-right"></i> Kết quả tìm hồ sơ</a></li>
                            <li><a href="xemhosotimkiem.php"><i class="fa fa-angle-double-right"></i> Chi tiết một hồ sơ tìm kiếm</a></li>
                            <li><a href="hoso.php"><i class="fa fa-angle-double-right"></i> Hồ sơ nhà tuyển dụng</a></li>
                            <li><a href="hosochitiet.php"><i class="fa fa-angle-double-right"></i> Chi tiết hồ sơ</a></li>
                            <li><a href="danhsachcongviecdadang.php"><i class="fa fa-angle-double-right"></i> Danh sách các công việc đã đăng</a></li>
                            <li><a href="dangcongviec.php"><i class="fa fa-angle-double-right"></i> Đăng công việc</a></li>
                            <li><a href="danhsachnhadauthau.php"><i class="fa fa-angle-double-right"></i> Danh sách các nhà thầu đã nạp hồ sơ dự thầu</a></li>
                            <li><a href="nhatuyedungxemsosanhungvien.php"><i class="fa fa-angle-double-right"></i> Xem so sánh các ứng viên</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">