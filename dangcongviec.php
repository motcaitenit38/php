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
                                    <label>Lĩnh vực: </label><select class="form-control" style=" width:200px; display: inline-block;">
  <option value="volvo">Công Nghệ Phần Mềm</option>
  <option value="saab">Xây Dựng Hạ Tầng</option>
  <option value="opel">Xây lắp</option>
  <option value="audi">Xây dựng Công Trình Ngầm</option>
</select> </li>
                                <li>
                                    <label>Ngành: </label><select class="form-control" style=" width:200px; display: inline-block;">
  <option value="volvo">Công Nghệ Phần Mềm</option>
  <option value="saab">Xây Dựng Hạ Tầng</option>
  <option value="opel">Xây lắp</option>
  <option value="audi">Xây dựng Công Trình Ngầm</option>
</select> </li>
                                <li>
                                    <label>Năm kinh nghiệm: </label> <input id="Text1" type="text" /> <label> Năm</label</li>
                                <li>
                                    <label>Giá trị hợp đồng lớn nhất: </label> <input id="Text2" type="text" />   <label>tỷ</label></li>
                            </ul>
                        </div>
                        <div>
                            <label>Nhân sự: </label>
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
                                            <td><input id="Text3" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td>Đại học</td>
                                            <td><input id="Text4" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td>Cao đẳng</td>
                                            <td><input id="Text5" type="text" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Công nhân</td>
                                            <td><input id="Text6" type="text" /> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <label>Thiết bị:</label>
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
                                            <td><input id="Text7" type="text" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Phương tiện vận chuyển</td>
                                            <td><input id="Text8" type="text" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Dây chuyền thiết bị sản xuất</td>
                                            <td><input id="Text9" type="text" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <label>Quy mô nhà máy:</label>
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
                                            <td><input id="Text10" type="text" /> </td>
                                            <td>m2 </td>
                                        </tr>
                                        <tr>
                                            <td>Phương tiện vận chuyển</td>
                                            <td><input id="Text11" type="text" /></td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td>Dây chuyền thiết bị sản xuất</td>
                                            <td><input id="Text12" type="text" /> </td>
                                            <td>tấn/h </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <label>Phạm vi hoạt động:</label><select class="form-control" style=" width:200px; display: inline-block;">
  <option value="volvo">Công Nghệ Phần Mềm</option>
  <option value="saab">Xây Dựng Hạ Tầng</option>
  <option value="opel">Xây lắp</option>
  <option value="audi">Xây dựng Công Trình Ngầm</option>
</select>
                            
                        </div>
                        <div>
                            <a href="danhsachcongviecdadang.php"> <button class="btn btn-primary btn-block btn-lg" type="button">Đăng công việc</button></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Chi tiết công việc</h3>
                        <div>
                            
                        </div>
                        <div>
                            <label>Các file mô tả :</label>
                            <ul>
                                <li> <a href="#">Tài liệu Spec</a></li>
                                <li> <a href="#">Tài liệu BoQ </a></li>
                                <li> <a href="#">Bản vẽ kết cấu</a></li>
                            </ul>
                        </div>
                        <div>
                            <label>Các file Báo cáo</label>
                            <ul>
                                <li> <a href="#">File mẫu báo cáo tài chính 3 năm gần nhất</a></li>
                                <li> <a href="#">File mẫu liệt kê danh mục thiết bị</a></li>
                                <li> <a href="#">File mẫu liệt kê năng lực nhân sự</a></li>
                                <li> <a href="#">File mẫu liệt kê danh mục hợp đồng đã thực hiện</a></li>
                            </ul>
                        </div>
                        <div>
                           
                       <a href="congviecdangyeucau.html"> <button class="btn btn-primary btn-block btn-lg" type="button">CÁC DỰ ÁN CỦA CÔNG TY</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>
