<?php require_once('menu.php')?>
<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">নতুন নিবন্ধন</h1>
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
					<form data-toggle="validator" action="newcore.php" method="POST" enctype="form/multipart">
					<div class="form-group">							
							<div class="row">							
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">পুরো নাম লিখুন <span style="color:red;font-size:15px"> *</span></label>
								<input type="text" name="funame"  class="form-control"  required>
								</div>
								
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">বাবার নাম লিখুন<span style="color:red;font-size:15px"> *</span></label>
								<input type="text" name="fname" class="form-control" id="inputPasswordConfirm"   required="">
									
								</div>
							</div>
							<div class="row">							
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">মায়ের নাম লিখুন <span style="color:red;font-size:15px"> *</span></label>
								<input type="text" name="mname"  class="form-control"  required="">
								</div>
								
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">জন্ম তারিখ লিখুন<span style="color:red;font-size:15px"> *</span></label>
								<input type="date" name="birth" class="form-control" id="inputPasswordConfirm"   required="">
								
								</div>
							</div>
							<div class="row">							
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">বিভাগ সিলেক্ট করুন <span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="divi" id="divi">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">ঢাকা বিভাগ</option>								
								<option value="2">রাজশাহী বিভাগ</option>							
								<option value="3">চট্রগ্রাম বিভাগ</option>
								<option value="4">খুলনা বিভাগ</option>
								<option value="5">বরিশাল বিভাগ</option>
								<option value="6">সিলেট বিভাগ</option>
								<option value="7">রংপুর বিভাগ</option>
								<option value="8">ময়মনসিংহ বিভাগ</option>
							</select>
								</div>
								
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">জেলা সিলেক্ট করুন <span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="jela" id="jela">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">রাজশাহী</option>								
								<option value="2">নাটোর</option>							
								<option value="3">নওগাঁ</option>
								<option value="4">চাঁপাইনবাবগঞ্জ</option>
								<option value="5">পাবনা</option>
								<option value="6">সিরাজগঞ্জ</option>
								<option value="7">বগুড়া</option>
								<option value="8">জয়পুরহাট</option>
							</select>
								</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">উপজেলা সিলেক্ট করুন <span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="upjela" id="upozela">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">গোদাগাড়ী</option>								
								<option value="2">তানোর</option>							
								<option value="3">মোহনপুর</option>
								<option value="4">বাগমারা</option>
								<option value="5">দুর্গাপুর</option>
								<option value="6">বাঘা</option>
								<option value="7">চারঘাট</option>
								<option value="8">পবা</option>
								<option value="8">পুঠিয়া</option>
							</select>
								</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">ইউনিয়ন সিলেক্ট করুন <span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="union" id="union">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">বাজুবাঘা ইউনিয়ন</option>								
								<option value="2">গড়গড়ি ইউনিয়ন</option>							
								<option value="3">পাকুড়িয়া ইউনিয়ন </option>
								<option value="4">মনিগ্রাম ইউনিয়ন</option>
								<option value="5">বাউসা ইউনিয়ন</option>
								<option value="6">আড়ানী ইউনিয়ন</option>
								<option value="7">চকরাজাপুর ইউনিয়ন</option>
								
							</select>
								</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">ওয়ার্ড<span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="word">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">১</option>								
								<option value="2">২</option>							
								<option value="3">৩</option>
								<option value="4">৪</option>
								<option value="5">৫</option>
								<option value="6">৬</option>
								<option value="7">৭</option>
								<option value="8">৯</option>
								<option value="9">১০</option>©
								<option value="10">১১</option>
								<option value="11">১২</option>
								<option value="12">১৩</option>
								</select>									
								</div>

								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">রক্তের গ্রুপ সিলেক্ট করুন <span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="blood">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">A+</option>								
								<option value="2">B+</option>							
								<option value="3">O+ </option>
								<option value="4">AB+</option>
								<option value="5">A-</option>
								<option value="6">B-</option>
								<option value="7">O-</option>
								<option value="7">AB-</option>
								
							</select>
								</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">পেশায় কি করেন<span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="work">
								<option value="">সিলেক্ট করুন</option>
								<option value="1">শিক্ষক</option>								
								<option value="2">ডাক্তার</option>							
								<option value="3">ব্যাবসা</option>
								<option value="4">ইন্জিনিয়ার</option>
								<option value="5">সরকারী চাকুরি</option>
								<option value="6">সার্ভিস</option>
								<option value="7">সাংবাদিক</option>
								<option value="8">গৃহীনি</option>
								<option value="8">ছাত্র</option>
								<option value="8">অন্যান্য</option>
								</select>									
							</div>	
							<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">আপনার মোবাইল নাম্বার লিখুন<span style="color:red;font-size:15px"> *</span></label>
								<input type="number" name="mobile"  class="form-control" id="inputPasswordConfirm"   required="">
									
								</div>
								</div>											
														
							
							<div class="row">
							<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">রাজনৈতিক আদর্শ<span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="adrsho" >
								<option value="">সিলেক্ট করুন</option>							
								<option value="2">জাতিয়তাবাদী</option>							
								<option value="3">আওয়ামীলিগ</option>
								<option value="4">বি এন পি</option>
								<option value="8">অন্যান্য</option>
								</select>									
							</div>
							<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">পরিবারে কতজন আছে<span style="color:red;font-size:15px"> *</span></label>
								<select class="form-control" name="fmember" >
								<option value="">সিলেক্ট করুন</option>							
								<option value="2">১</option>							
								<option value="3">২</option>
								<option value="4">৩</option>
								<option value="8">৪</option>
								<option value="8">৫</option>
								<option value="8">৬</option>
								<option value="8">৭</option>
								<option value="8">৮</option>
								<option value="8">৯</option>
								<option value="8">১০</option>
								<option value="8">১১</option>
								<option value="8">১১+</option>
								
								</select>									
							</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">ই-মেইল লিখুন</label>
								<input type="text" name="email" class="form-control" id="inputPasswordConfirm" >
									
								</div>
								<div class="form-group col-sm-3">
								<label for="inputPassword" class="control-label">ছবি দিন<span style="color:red;font-size:15px"> *</span></label>
								<input type="file" name="profilepic" class="form-control" required >
									
								</div>
							</div>



							</div>
							<div class="float-right"><input type="submit" name="submit" class="btn btn-primary" value="তথ্য সাবমিট করুন"></div>
						</div>
						
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			<?php require_once('footer.php')?>
		</div>

	</div>

</div>
	



