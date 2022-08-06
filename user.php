<?php include 'menu.php'?>
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">ইউজার</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item ti-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="ti-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item ti-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item ti-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
		<div class="ico-item">
			<i class="ti-user"></i>
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a class="js__logout" href="#">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">ইউজার এর তথ্য</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<div class="newuser">
						<button class="btn btn-primary"><a href="newuser.php"> নতুন ইউজার বানান</a></button>
						</div>
						
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example-scroll-y" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>ছবি</th>
								<th>নাম</th>
								<th>পিতার নাম</th>
								<th>মাতার নাম</th>
								<th>জন্ম তারিখ</th>
								<th>বিভাগ</th>
								<th>জেলা</th>
								<th>উপজেলা</th>
								<th>ইউনিয়ন</th>
								<th>পেশা</th>
								<th>রক্তের গ্রুপ</th>
								<th>এডিট/ডিলিট</th>
							</tr>
						</thead>
						
						
						</tbody>
					</table>
				</div>







<?php include 'footer.php'?>
