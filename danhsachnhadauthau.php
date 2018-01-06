<?php include('header.php');
include('headtimkiem.php'); ?>
<div class="text-center">    
    <div class="row">
    <div class="col-sm-4">
         <div class="welll">
    <p>Công Việc Đã Đăng</p>
   </div>
    </div>
    <div class="col-sm-4"> 
         <div class="welll">
   <p>Công Việc Đang Quan Tâm</p></div>
    </div>
    <div class="col-sm-4">
      <div class="welll">
       <p>Tìm Kiếm Hồ Sơ</p>
      </div>
   
     
    </div>
  </div>
 </div>
  <!-- <div class="container"> -->
  <h2>Chi tiết 1 công việc đã đăng</h2>
                 
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="auto-style3">STT</th>
        <th>Tên nhà cung cấp (định làm)</th>
        <th>Vốn điều lệ</th>
           <th>Năm kinh nghiệm</th>
        <th>Giá trị hợp đồng tương tự</th>
        <th>Giá chào</th>
           <th>Tình trạng</th>
        <th>Hồ sơ tham gia</th>
        <th>Tiếp tục or Kết thúc</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="auto-style3">1</td>
        <td>A</td>
        <td>5</td>
          <td>6</td>
        <td>7</td>
        <td>15</td>
          <td>Đang xem hồ sơ</td>
        <td><a>Link or file đính kèm</a></td>
        <td>Tiếp tục</td>
      </tr>
        <tr>
        <td class="auto-style3">2</td>
        <td>B</td>
        <td>5</td>
          <td>6</td>
        <td>7</td>
        <td>50</td>
          <td>Đang xem hồ sơ</td>
        <td><a>Chưa xem hồ sơ</a></td>
        <td>Tiếp tục</td>
      </tr>
        <tr>
        <td class="auto-style3">3</td>
        <td>C</td>
        <td>5</td>
          <td>6</td>
        <td>7</td>
        <td>30</td>
          <td>Đang xem hồ sơ</td>
        <td><a>Link or file đính kèm</a></td>
        <td>Kết thúc -> Đánh giá</td>
      </tr>
      <tr>
        <td class="auto-style3">4</td>
        <td>C</td>
        <td>5</td>
          <td>6</td>
        <td>7</td>
        <td>20</td>
          <td>Đang xem hồ sơ</td>
        <td><a>Đang Liên hệ </a></td>
        <td>Tiếp tục</td>
      </tr>
    </tbody>
  </table>    
        <div class=" text-center"><< <a>1</a> 2 3<a>>></a> </div>                                   
  </div>
    
        <form id="form1" runat="server">
        <asp:Button ID="Button1" runat="server" Text="Quay Lại" BackColor="#CCCCCC" BorderColor="Gray" ForeColor="White"  />
    </form>
 
<?php include('footer.php') ?>