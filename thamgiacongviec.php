<?php include('header.php') ?>

<header>
        <div class="container-fluid">
            <div class="row header1">
                <div class="col-md-2 logo">
                    <img class="img-responsive" src="assets/img/banner-cpit.png" width="300">
                </div>
                <div class="col-md-6 search">
                    <div class="tenviec">
                        <div class="form-group inputtimkiem col-md-5">
                            <label for="usr">Tên việc làm:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group inputtimkiem col-md-5">
                            <label for="usr">Địa điểm:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="inputsearch">
                            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="btn-group lienket" role="group"><a class="btn btn-link" role="button" href="hosodoanhnghiep.html">Hồ sơ doanh nghiệp</a><a class="btn btn-info" role="button" href="dangkytuyendung.html">Nhà tuyển dụng</a></div>
                </div>
            </div>
        </div>
    </header>
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-3">
                <div class="well">
                    <div class="container-fluid"><img class="img-responsive" src="assets/img/400x300.png" width="100%">
                        <h4>Xây dựng tuyến đê biển Nam Đình Vũ thuộc Khu kinh tế Đình Vũ – Cát Hải&nbsp; </h4>
                        <h5> <a href="#">Ban Quản lý Khu kinh tế Hải Phòng.&nbsp; </a></h5>
                        <h5><label> <i class="glyphicon glyphicon-map-marker"></i> Địa điểm: </label>Hải phòng</h5>
                        <h5><label> <i class="glyphicon glyphicon-usd"></i> Giá trị công việc: </label>17.775.000.000 đồng</h5>
                        <h5> <label> <i class="glyphicon glyphicon-time"></i> Thời gian báo giá:</label> 16/07/2011</h5>
                        <h5><label> <i class="glyphicon glyphicon-time"></i> Thời gian dự kiến thực hiện: </label>150 ngày kể từ ngày 28/10/2011</h5></div>
                </div>
            </div>
            <div class="col-md-9">
                <h3>Hồ sơ cá nhân<small class="pull-right"><a href="#">Xem </a> / <a href="#">Sửa </a></small></h3>
                <div class="well">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Công ty xây dựng Thăng Long</h4>
                            <h5> <label>Loại hình : </label><span>Công ty TNHH</span></h5>
                            <h5> <label>Lĩnh vực hoạt động chính: </label><span>Xây dựng</span></h5></div>
                        <div class="col-md-6">
                            <h5> <label>Trụ sở chính : </label><span>Số 1, Hàng Bài, Hà Nội</span></h5>
                            <h5> <label>Vốn điều lệ: </label><span>100 tỷ đồng</span></h5>
                            <h5> <label>Năm kinh nghiệm : </label><span>5 năm</span></h5></div>
                    </div>
                </div>
                <h3>Các file yêu cầu tải lên</h3>
                <ul>
                    <li><a href="#">Hồ sơ doanh nghiệp </a><span> - HoSoDoanhNghiep.docx</span> </li>
                    <li> <a href="#">Scan hợp đồng lớn nhất </a></li>
                    <li> <a href="#">Báo cáo tài chính 3 năm gần nhất </a></li>
                    <li> <a href="#">Bảng liệt kê danh mục thiết bị </a></li>
                    <li> <a href="#">Bảng liệt kê danh mục nhân sự </a></li>
                    <li> <a href="#">Bảng liệt kê danh mục hợp đồng đã thực hiện </a></li>
                    <li> <a href="#">Hợp đồng tương tự </a></li>
                    <li> <a href="#">Biện pháp thi công </a></li>
                </ul>
                <div class="input-group">
                    <div class="input-group-addon"><span>Giá chào</span></div>
                    <input class="form-control" type="text" required="" inputmode="numeric">
                </div>
                <button class="btn btn-primary btn-lg center-block" type="button" style="margin-top: 20px;" data-toggle="modal" data-target="#ModalSubmitJobSuccess">ỨNG TUYỂN</button>
                <div class="modal fade" role="dialog" tabindex="-1" id="ModalSubmitJobSuccess">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h4>Nộp hồ sơ ứng tuyển thành công. </h4>
                                <h4>Đơn vị sẽ xem xét hồ sơ và liên lạc lại với bạn sớm nhất có thể. </h4>
                                <h4>Bạn có thể xem lại công việc này trong <a href="#">lịch sử </a></h4></div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Đóng </button>
                                <button class="btn btn-primary" type="button">Đi tới lịch sử </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
<?php include('footer.php') ?>