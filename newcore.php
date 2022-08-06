<?php 
if (isset($_REQUEST['submit'])) {
require_once('config.php');
$name 		= $_REQUEST['funame'];
$fname		= $_REQUEST['fname'];
$mname		= $_REQUEST['mname'];
$brith		= $_REQUEST['birth'];
$divi		= $_REQUEST['divi'];
$jela		= $_REQUEST['jela'];
$upjela		= $_REQUEST['upjela'];
$uneon		= $_REQUEST['union'];
$word		= $_REQUEST['word'];
$blood		= $_REQUEST['blood'];
$work		= $_REQUEST['work'];
$mobile		= $_REQUEST['mobile'];
$adrsho		= $_REQUEST['adrsho'];
$fmember	= $_REQUEST['fmember'];
// // $email		= $_REQUEST['email'];
// // $image		= $_FILES ["profilepic"];
// // $imagename = $_FILES['profilepic']['name'];
// $tmp_name = $_FILES['profilepic']['tmp_name'];
// $location = "upload/";
// // $avaterid= uniqid();
move_uploaded_file($tmp_name, $location . $avaterid . ".jpg");
var_dump($_FILES) ;

// $selectData = mysqli_query($conn, "SELECT * FROM registerd_user WHERE mobile='$mobile'");
// $count = mysqli_num_rows($selectData);
// if ($count===0) {
// 	$insertfile = mysqli_query($conn, "INSERT INTO registerd_user(name,fname,mname,brith,divi,jela,upjela,uneon,word,blood,work,mobile,adrsho,fmember,email,image) VALUES ('$name ','$fname','$mname','$brith','$divi','$jela','$upjela','$uneon','$word','$blood','$work','$mobile','$adrsho','$fmember','$email','$avaterid.jpg')");
// if ($insertfile==true) {
		
// 		header("location:newuser.php?done");
// }else{

// }
// 	}else{
// 		header("location:newuser.php?useralreadyregisterd");
// 	}



}

















