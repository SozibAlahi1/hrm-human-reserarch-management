
<?php include 'menu.php'?>

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">নীড়</h1>
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
			<div class="col-lg-3">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-user text-primary"></i>
						<h2 class="counter text-primary">2561</h2>
						<p class="text">টোটাল ইউজার</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
			</div>	
			<div class="col-lg-3">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-location-pin text-secondary"></i>
						<h2 class="counter text-secondary">2561</h2>
						<p class="text">টোটাল ইউনিয়ন</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-home text-info"></i>
						<h2 class="counter text-info">2561</h2>
						<p class="text">টোটাল ওয়ার্ড</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
			</div>
			<div class="col-lg-3">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico ti-map-alt text-success"></i>
						<h2 class="counter text-success">2561</h2>
						<p class="text">টোটাল বিভাগ</p>
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
			</div>
				<!-- /.box-content -->

			<!-- /.col-lg-3 col-xs-12 -->
			
		</div>
		<!-- /.row small-spacing -->
	
		
<?php include 'footer.php'?>