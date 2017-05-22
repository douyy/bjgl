<?php 
	$id = $_POST['id'];
	$sex = $_POST['sex'];
	$telephone = $_POST['telephone'];
	$qq = $_POST['qq'];
	$weixin = $_POST['weixin'];
	$gongsi = $_POST['gongsi'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$zuoyouming = $_POST['zuoyouming'];

	if(!preg_match('/^1[35678][\d]{9}$/',$telephone)){
		echo "wrong";
		exit;
	}
	if(!preg_match('/^\d{5,11}$/',$qq)){
		echo "wrong";
		exit;
	}
	if(!preg_match('/^[a-zA-Z\d_]{5,}$/',$weixin)){
		echo 'wrong';
		exit;
	}
	if(!preg_match('/^([\w+]+\@+([\w+])+\.+([\w+]){2,4})+$/',$email)){
		echo 'wrong';
		exit;
	}

	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$res = mysqli_query($conn,"UPDATE gerexinxi SET sex = '{$sex}',telephone = '{$telephone}',qq = '{$qq}',weixin = '{$weixin}',gongsi = '{$weixin}',address='{$address}',email = '{$email}',zuoyouming = '{$zuoyouming}' WHERE id = '{$id}';");
	if($res == 1){
		echo "ok";
	}else{
		echo "wrong";
	}
	mysqli_close($conn);
 ?>