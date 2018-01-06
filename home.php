<?php include('header.php') ?>


<!-- bắt đầu nội dung thay đổi -->
<div class="page-top">
    <ul class="list-unstyled top-menu">
        <li> <a href="dangkytuyendung.php" class="top-menu-link">Nhà Tuyển Dụng</a></li>
        <li> <a href="timhoso.php" class="top-menu-link">Hồ Sơ Doanh Nghiệp</a></li>
        <li><button class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Đăng nhập/Đăng ký</button></li>
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
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#signin" data-toggle="tab">Đăng nhập</a></li>
                    <li class=""><a href="#signup" data-toggle="tab">Đăng ký</a></li>
                    <li class=""><a href="#why" data-toggle="tab">Hỗ trợ</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in" id="why">
                        <p>Liên hệ bộ phân kỹ thuật: 19001009</p>
                        <p></p>
                        <br> Email: <a mailto:href="admin@admin.com"></a>admin@admin.com</a> để được hỗ trợ</p>
                    </div>
                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal">
                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->
                                <div class="control-group">
                                    <label class="control-label" for="userid">Tên đăng nhập:</label>
                                    <div class="controls">
                                        <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="admin" class="input-medium" required="">
                                    </div>
                                </div>
                                <!-- Password input-->
                                <div class="control-group">
                                    <label class="control-label" for="passwordinput">Mật khẩu:</label>
                                    <div class="controls">
                                        <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
                                    </div>
                                </div>
                                <!-- Multiple Checkboxes (inline) -->
                                
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <button id="signin" name="signin" class="btn btn-success">Đăng nhập</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal">
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="control-group">
                                    <label class="control-label" for="Email">Họ và tên:</label>
                                    <div class="controls">
                                        <input id="Email" name="Email" class="form-control" type="text" placeholder="Lê Xuân A" class="input-large" required="">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="control-group">
                                    <label class="control-label" for="userid">Tên công ty:</label>
                                    <div class="controls">
                                        <input id="userid" name="userid" class="form-control" type="text" placeholder="Công ty TNHH A" class="input-large" required="">
                                    </div>
                                </div>
                                <!-- Password input-->
                                <div class="control-group">
                                    <label class="control-label" for="password">Địa chỉ:</label>
                                    <div class="controls">
                                        <input id="password" name="password" class="form-control" type="text" placeholder="Địa chỉ" class="input-large" required="">
                                        <em>Điền địa chỉ của bạn</em>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="control-group">
                                    <label class="control-label" for="reenterpassword">bạn là: </label>
                                    <div class="controls">
                                        <label class="radio-inline"><input type="radio" name="optradio">Nhà tuyển dụng</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Tìm việc</label>
                                    </div>
                                </div>
                                <!-- Multiple Radios (inline) -->
                                <br>
                                
                                        <!-- Button -->
                                        <div class="control-group">
                                            <label class="control-label" for="confirmsignup"></label>
                                            <div class="controls">
                                                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Đăng ký</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>