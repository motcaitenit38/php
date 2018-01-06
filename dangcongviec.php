<?php include('header.php') ?>

 <header>
        <div class="container-fluid">
            <div class="row header1">
                <div class="col-md-2 logo">
                    <img class="img-responsive" src="assets/img/banner-cpit.png" width="300">
                </div>
                <div class="col-md-7 search">
                    <div class="tenviec">
                        <div class="form-group inputtimkiem">
                            <label for="usr">Tên việc làm:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group inputtimkiem">
                            <label for="usr">Địa điểm:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="inputsearch">
                            <button class="btn btn-success" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="btn-group lienket" role="group">
                        <a class="btn btn-link" role="button" href="#">Hồ sơ doanh nghiệp</a>
                        <a class="btn btn-info" role="button" href="#">Nhà tuyển dụng</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <div class="well">
            <div class="container-fluid">
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
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Thông Tin Công Việc</h3>

                            <div>
							 <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>TÊN CÔNG VIỆC</th>
                                                <th colspan=2><input type="text" /></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Địa Điểm</td>
                                                <td colspan =2><input type="text" /><button class="btn btn-xs btn-danger" style="width: 25px;">-</button>
                                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalDiadiem" style="width: 25px;">+</button></td>
												
                                            </tr>
                                            <tr>
                                                <td>Giá Trị Công việc</td>
                                                <td>Từ<input type="text"  placeholder="Tỷ"/></td>
												<td>Đến<input type="text" placeholder="Tỷ" /></td>
											
                                            </tr>
                                            <tr>
                                                <td>Thời Gian Báo Giá</td>
                                                <td>Từ<input type="date" placeholder="12/12/2017"/></td>
												<td>Đến<input type="date"/></td	>
                                            </tr>
                                            <tr>
                                               <td>Dự Kiến Thực Hiện</td>
                                                <td>Từ<input type="date" /></td>
												<td>Đến<input type="date" /></td>
                                            </tr>
											<tr>
                                               <td>Vốn Điều Lệ</td>
                                                <td colspan=2><input type="text" /> Tỷ</td>
												
                                            </tr>
												<tr>
                                               <td>Năm Kinh Nghiệm</td>
                                                <td colspan=2><input type="text" /> Năm</td>
												
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <ul>
                                    <li>
                                        <label>Lĩnh vực: </label>
                                        <select class="form-control" style="width: 200px; display: inline-block;">
                                            <option>Công nghệ phần mềm</option>
                                            <option>Xây dựng</option>
                                        </select>
                                        
                                        <button class="btn btn-xs btn-danger" style="width: 25px;">-</button>
                                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modalThemLinhVuc" style="width: 25px;">+</button>
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
                                    <a href="#" data-toggle="modal" data-target="#modalSuaPhamViHoatDong">Phạm Vi Hoạt Động:</a>
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
                            <h3>Mô tả chi tiết công việc</h3>
                            <div>
                                <textarea rows="5" cols="20" style="margin: 0px; width: 597px; height: 182px;">
								Yêu cầu:
- Đơn vị có 5 năm trong lĩnh vực sản xuất bê tông nhựa và thi công thảm mặt đường.
- Có 2 kỹ sư đường có kinh nghiệm tối thiểu 3 năm.
- Giá trị hợp đồng tương tự tối thiểu là 30 tỷ
- Có 2 dây chuyền thảm. Mỗi dây chuyền có 1 lu 20 tấn, 2 lu 10 tấn.
- Có 10 xe tải >=15 tấn vận chuyển thảm 
- Thi công trọn gói
- Chi tiết theo spec và Boq

								</textarea>
                            </div>
                           
                        </div>
						  <div class="col-md-6">
                            <h3>Danh mục các tài liệu bắt buộc đính kèm khi nộp hồ sơ tham gia</h3>
                            <div>
                                <label>
                                    <a href="#" data-toggle="modal" data-target="#modalSuaCacFileMau">Các mẫu file</a>
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

                                <a href="congviecdangyeucau.html">
                                    <button class="btn btn-primary btn-block btn-lg" type="button">Đăng Công Việc</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MODALS --> 
    <div class="modal fade" id="modalSuaTen">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật tên công ty</h4>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Nhập tên công ty mới" value="Công Ty Cổ Phần CPIT">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaDiaDiem">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật địa điểm công ty</h4>
                </div>
                <div class="modal-body">
                    <select class="form-control">
                        <option>Chọn địa điểm công ty</option>
                        <option>Hà nội</option>
                        <option>Hồ chí minh</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaVonDieuLe">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật vốn điều lệ công ty</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Nhập vốn điều lệ" value="17775000000">
                        <span class="input-group-addon">đồng</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDiadiem">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Thêm Địa Điểm</h4>
                </div>
                <div class="modal-body">
                    <select class="form-control">
                        <option>Chọn Địa Điểm</option>
                        <option>Hà Nội</option>
                        <option>TP Hồ Chí Minh</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaNganh">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật ngành công ty</h4>
                </div>
                <div class="modal-body">
                    <select class="form-control">
                        <option>Chọn ngành chính</option>
                        <option>Công nghệ phần mềm</option>
                        <option>Xây dựng</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaNamKinhNghiem">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật năm bắt đầu: </h4>
                </div>
                <div class="modal-body">
                    <input type="number" class="form-control" placeholder="Nhập năm bắt đầu" value="2010">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaGiaTriHopDongLonNhat">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật giá trị hợp đồng lớn nhất: </h4>
                </div>
                <div class="modal-body">
                    <input type="number" class="form-control" placeholder="Nhập giá trị hợp đồng lớn nhất" value="34000000000">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaNhanSu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật nhân sự công ty: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Nhân sự</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiến sỹ</td>
                                <td>
                                    <input type="number" class="form-control" value="0">
                                </td>
                            </tr>
                            <tr>
                                <td>Đại học</td>
                                <td><input type="number" class="form-control" value="3"></td>
                            </tr>
                            <tr>
                                <td>Cao đẳng</td>
                                <td><input type="number" class="form-control" value="3"></td>
                            </tr>
                            <tr>
                                <td>Công nhân</td>
                                <td><input type="number" class="form-control" value="10"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaThietBi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật thiết bị công ty: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Thiết bị</th>
                                <th>Số lượng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Thiết bị sản xuất thi công
                                </td>
                                <td><input type="number" class="form-control" value="5"></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>Phương tiện vận chuyển</td>
                                <td><input type="number" class="form-control" value="10"></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control">
                                        <option>Chọn loại thiết bị</option>
                                        <option>Dây chuyền thiết bị sản xuất</option>
                                    </select>
                                </td>
                                <td><input type="number" class="form-control" placeholder="Số lượng thiết bị" value="1"></td>
                                <td><button class="btn btn-success" style="width: auto;">+</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaQuyMoNhaMay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật quy mô nhà máy: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
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
                                <td><input type="number" class="form-control" value="2000"> </td>
                                <td>m2 </td>
                            </tr>
                            <tr>
                                <td>Phương tiện vận chuyển</td>
                                <td><input type="number" class="form-control" value="1"> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>
                                    Dây chuyền thiết bị sản xuất</td>
                                <td><input type="number" class="form-control" value="80"> </td>
                                <td>tấn/h </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaPhamViHoatDong">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật phạm vi hoạt động: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Phạm vi hoạt động</th>
                                <th>Ưu tiên</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Thành phố Hải Phòng
                                </td>
                                <td><input type="checkbox" checked></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>
                                    Hà Nội
                                </td>
                                <td><input type="checkbox"></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>
                                    Thành phố Đà Nẵng
                                </td>
                                <td><input type="checkbox"></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control">
                                        <option>Thành phố Hồ Chí Minh</option>
                                    </select>
                                </td>
                                <td><input type="checkbox"></td>
                                <td><button class="btn btn-success" style="width: auto;">+</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSuaCacFileMau">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cập nhật các file mẫu: </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Tên file</th>
                                <th>Dữ liệu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>File mẫu báo cáo tài chính 3 năm gần nhất</td>
                                <td><a href="#">baocaotaichinh3nam.docx</a></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>File mẫu liệt kê danh mục thiết bị</td>
                                <td><a href="#">lietkethietbi.docx</a></td>
                                <td><button class="btn btn-danger">-</button></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" value="File mẫu liệt kê năng lực nhân sự">
                                </td>
                                <td>
                                    <button class="btn btn-primary">Tải tệp lên</button>
                                    <a href="#">lietkenhansu.docx</a>
                                </td>
                                <td><button class="btn btn-success" style="width: auto;">+</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php') ?>
