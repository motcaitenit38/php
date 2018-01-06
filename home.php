<?php include('header.php') ?>


                <!-- bắt đầu nội dung thay đổi -->
                <div class="page-top">
        <ul class="list-unstyled top-menu">
            <li> <a href="dangkytuyendung.php" class="top-menu-link">Nhà Tuyển Dụng</a></li>
            <li> <a href="timhoso.php" class="top-menu-link">Hồ Sơ Doanh Nghiệp</a></li>
            <li> <a href="Login1.html" class="inverse top-menu-link">Đăng nhập / Đăng ký</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="container-fluid home-main">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <div><img class="img-responsive home-banner" src="assets/img/800x100.jpg" width="600">
                    <form>
                        <div class="row">
                            <div class="col-md-7 col-sm-9">
                                <div class="form-group"><span class="label label-default sr-only">Query </span>
                                    <input class="form-control input-lg" type="text" placeholder="Nhập từ khóa" autofocus="">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <select class="form-control input-lg">
                                        <option value="0" selected="">Tất cả</option>
                                        <option value="1">Lĩnh vực</option>
                                        <option value="">Phạm vi</option>
                                        <option value="">Giá trị hợp đồng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                             <a href="ketqua.php"><button class="btn btn-primary btn-lg" type="button"> Tìm công việc</button></a>
                            </div>
                        </div>
                    </form><a href="#" id="advanceSearchToggle">Tìm kiếm nâng cao</a>
                    <div class="well" id="advanceSearch" style="display: none">
                        <form class="form-horizontal">
                            <label>Năng lực ngành nghề</label>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Năm kinh nghiệm</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1" selected="">Dưới 1 năm</option>
                                        <option value="2">1 - 5 năm</option>
                                        <option value="3">5 - 15 năm</option>
                                        <option value="4">15 - 30 năm</option>
                                        <option value="5">Trên 30 năm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Giá trị hợp đồng</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1" selected="">Dưới 500 triệu</option>
                                        <option value="2">0.5 - 5 tỷ</option>
                                        <option value="3">5 - 20 tỷ</option>
                                        <option value="4">20 - 100 tỷ</option>
                                        <option value="5">Trên 100 tỷ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Năng lực máy móc - thiết bị</label>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Năng lực nhân sự</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1">Dưới 50 nhân viên</option>
                                        <option value="2">50 - 200 nhân viên</option>
                                        <option value="3">200 - 1000 nhân viên</option>
                                        <option value="5">Trên 1000 nhân viên</option>
                                    </select>
                                </div>
                            </div>
                            <label>Năng lực tài chính</label>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Vốn điều lệ</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1">Dưới 1 tỷ</option>
                                        <option value="2">1 - 10 tỷ</option>
                                        <option value="3">10 - 100 tỷ</option>
                                        <option value="5">100 - 1000 tỷ</option>
                                        <option value="6">Trên 1000 tỷ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label class="control-label">Doanh thu</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="1">Dưới 1 tỷ</option>
                                        <option value="2">1 - 10 tỷ</option>
                                        <option value="3">10 - 100 tỷ</option>
                                        <option value="5">100 - 1000 tỷ</option>
                                        <option value="6">Trên 1000 tỷ</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <h5>Lịch sử tìm kiếm</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Xây dựng</a><span class="text-danger"> - 3.572 mới</span></li>
                        <li><a href="#">Sản xuất - Hà nội</a><span class="text-danger"> - 1.204 mới</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="#">Điều khoản sử dụng</a><span> - </span><a href="#">Chính sách bảo mật</a><span> - </span><a href="#">Mẹo tìm công việc</a></div>
                <!-- kết thúc nội dung thay đổi -->

<?php include('footer.php') ?>