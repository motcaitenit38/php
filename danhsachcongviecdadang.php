<?php include('header.php');
include('headtimkiem.php'); ?>



 
  <!-- <div class="container"> -->
  
  <h2>Những Công Việc Đã Đăng </h2>
             <div class="row">
    <div class="col-sm-4">
			Các công việc mà công ty đã đăng lên
   
    </div>
    <div class="col-sm-4"> 
   
    </div>
    <div class="col-sm-4">
     
	
            <p><a href="dangcongviec.php"><button type="button" class="btn btn-info">Thêm mới</button></a></p>
    
    </div>
  </div>                                   
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên Công việc</th>
        <th>Số lượng Nhà Cung cấp</th>
        <th>Thời hạn</th>
        <th>Trạng thái</th>
		
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td> <a href="chitiet1congvieadadang.php">Nhà thép tiền chế</a></td>
        <td>5</td>
        <td>22/03/2018</td>
        <td>Đang nhận hồ sơ</td>
       
      </tr>
         <tr>
        <td>2</td>
        <td>Thi công móng nhà máy</td>
        <td>10</td>
        <td>22/03/2018</td>
        <td>Đang nhận hồ sơ</td>
       
      </tr>
         <tr>
        <td>3</td>
        <td><a href="chitiet1congviecdadang.html">Thiết kế móng</a></td>
        <td>12</td>
        <td>22/03/2018</td>
        <td>Đang nhận hồ sơ</td>
       
      </tr> <tr>
        <td>4</td>
        <td>Vận chuyển vật liệu</td>
        <td>15</td>
        <td>22/03/2018</td>
        <td>Đang nhận hồ sơ</td>
       
      </tr>
    </tbody>
  </table>
  </div>
        <div class=" text-center"><< <a>1</a> 2 3<a>>></a> </div>
<!-- </div> -->
<form id="form1" runat="server">
        <asp:Button ID="Button1" runat="server" Text="Quay Lại" BackColor="#CCCCCC" BorderColor="Gray" ForeColor="White"  />
    </form>
 


<?php include('footer.php') ?>