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
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#home">Việc đã ứng tuyển hợp lệ</a></li>
	<li><a data-toggle="tab" href="#menu1">Tất cả việc đã ứng tuyển</a></li>
	
</ul>

<div class="tab-content">
	<div id="home" class="tab-pane fade in active">
		<div class="col-md-6">
			<div class="col-md-7">
				<h3><p>Quản đốc xưởng</p></h3>
				<h4><p>Công ty TNHH Xuân Trường</p></h4>
				<p><i class="glyphicon glyphicon-ok"></i> Hồ sơ đang được xét</p>
				<p><i class="glyphicon glyphicon-flag"></i> 1 người ứng tuyển <span class="label label-primary">So sánh</span></p> 
			</div>
			<div class="col-md-5"></div>
		</div>
		
	</div>
	<div id="menu1" class="tab-pane fade">
		<h3>Tất cả việc đã ứng tuyển</h3>
		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	
</div>
<?php include('footer.php') ?>