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
    <div>
        <div class="well">
            <!-- <div class="container-fluid"> -->
                <div class="row">
                    <div class="col-md-2">
                        <img class="img-responsive" src="assets/img/banner-cpit.png" width="100%">
                    </div>
                    <div class="col-md-6">
                        <a href="#" data-toggle="modal" data-target="#modalSuaTen"><h4>Công Ty Cổ Phần CPIT </h4></a>
                        <!-- <h5>
                            <a href="#">Ban Quản lý Khu kinh tế Hà Nội </a>
                        </h5> -->
                        <h5>
                            <label>
                                <i class="glyphicon glyphicon-map-marker"></i> Địa điểm: 
                            </label>
                            <a href="#" data-toggle="modal" data-target="#modalSuaDiaDiem">Hà Nội</a>
                        </h5>
                    </div>
                    <div class="col-md-4">
                        <h5>
                            <label>
                                <i class="glyphicon glyphicon-usd"></i> Vốn Điều Lệ 
                            </label>
                            <a href="#" data-toggle="modal" data-target="#modalSuaVonDieuLe">17.775.000.000 đồng</a>
                        </h5>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- <div class="container"> -->
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Thông Tin Của Công Ty</h3>

                            <div>
                                <label>Lĩnh vực hoạt động: </label>
                                <ul>
                                    <li>
                                        <label>Lĩnh vực: </label>
                                        <select class="form-control" style="width: 200px; display: inline-block;">
                                            <option>Công nghệ phần mềm</option>
                                            <option>Xây dựng</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>Ngành: </label>
                                        <a href="#" data-toggle="modal" data-target="#modalSuaNganh"><span>Công Nghệ Phần Mềm</span></a>
                                    </li>
                                    <li>
                                        <label>Năm kinh nghiệm: </label>
                                        <a href="#" data-toggle="modal" data-target="#modalSuaNamKinhNghiem"><span>Trên 5 năm</span></a>
                                    </li>
                                    <li>
                                        <label>Giá trị hợp đồng lớn nhất: </label>
                                        <a href="#" data-toggle="modal" data-target="#modalSuaGiaTriHopDongLonNhat"><span>34 tỷ</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaNhanSu">Nhân sự: </a>
                                </label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nhân sự</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiến sỹ</td>
                                                <td>0 </td>
                                            </tr>
                                            <tr>
                                                <td>Đại học</td>
                                                <td>3 </td>
                                            </tr>
                                            <tr>
                                                <td>Cao đẳng</td>
                                                <td>3 </td>
                                            </tr>
                                            <tr>
                                                <td>Công nhân</td>
                                                <td>10 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaThietBi">Thiết bị:</a>
                                </label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Thiết bị</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Thiết bị sản xuất thi công</td>
                                                <td>5 </td>
                                            </tr>
                                            <tr>
                                                <td>Phương tiện vận chuyển</td>
                                                <td>10 </td>
                                            </tr>
                                            <tr>
                                                <td>Dây chuyền thiết bị sản xuất</td>
                                                <td>1 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaQuyMoNhaMay">Quy mô nhà máy:</a>
                                </label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nhà máy sản xuất</th>
                                                <th>Giá trị</th>
                                                <th>Đơn vị</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Diện tích</td>
                                                <td>2000 </td>
                                                <td>m2 </td>
                                            </tr>
                                            <tr>
                                                <td>Phương tiện vận chuyển</td>
                                                <td>1 </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>Dây chuyền thiết bị sản xuất</td>
                                                <td>80 </td>
                                                <td>tấn/h </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaPhamViHoatDong">Phạm vi hoạt động:</a>
                                </label>
                                <ul>
                                    <li>
                                        <span>Thành phố Hải Phòng</span>
                                        <label> (Ưu tiên) </label>
                                    </li>
                                    <li>
                                        <label></label>
                                        <span>Hà Nội</span>
                                    </li>
                                    <li>
                                        <label></label>
                                        <span>Thành phố Đà Nẵng</span>
                                    </li>
                                    <li>
                                        <label></label>
                                        <span>Thành phố Hồ Chí Minh</span>
                                    </li>
                                </ul>
                            </div>
                            <div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Công việc</h3>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaCacFileMau">Các file mẫu</a>
                                </label>
                                <ul>
                                    <li>
                                        <a href="#">File mẫu báo cáo tài chính 3 năm gần nhất</a>
                                    </li>
                                    <li>
                                        <a href="#">File mẫu liệt kê danh mục thiết bị</a>
                                    </li>
                                    <li>
                                        <a href="#">File mẫu liệt kê năng lực nhân sự</a>
                                    </li>
                                    <li>
                                        <a href="#">File mẫu liệt kê danh mục hợp đồng đã thực hiện</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3>Các công việc công ty tham gia</h3>
                                <ul>
                                    <li>
                                        <a href="chitietcongviec1.html">
                                            Xây dựng tuyến đê biển Nam Đình Vũ thuộc Khu kinh tế Đình Vũ – Cát Hải 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chitietcongviec1.html">
                                            Xây dựng đường vành đai 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chitietcongviec1.html">
                                            Xây dựng tuyến đường Thái Nguyên – Chợ Mới (Bắc Kạn)
                                        </a>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalMoiThamGiaCongViec">Mời tham gia công việc</button>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>




    <div class="modal fade" id="modalMoiThamGiaCongViec">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Mời Công ty cổ phần CPIT tham gia công việc: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Công việc hiện có</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Xây dựng tuyến đê biển Nam Đình Vũ thuộc Khu kinh tế Đình Vũ – Cát Hải</td>
                                <td><label class="text-success">Đã tham gia</label></td>
                            </tr>
                            <tr>
                                <td>Xây dựng đường vành đai 2</td>
                                <td><button class="btn btn-success btn-sm">Gửi</button></td>
                            </tr>
                            <tr>
                                <td>Xây dựng tuyến đường Thái Nguyên – Chợ Mới (Bắc Kạn)</td>
                                <td><button class="btn btn-success btn-sm">Gửi</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php include('footer.php') ?>