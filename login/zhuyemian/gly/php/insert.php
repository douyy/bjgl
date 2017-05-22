<?php 
	$username = $_GET['username'];
	$password = $_GET['password'];
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result1 = mysqli_query($conn,"SELECT * FROM user ORDER BY id ASC");
	while ($row = mysqli_fetch_array($result1)) {
		// if ($row['id'] == '') {
		// 	$id = 0;
		// }else{
			$id = $row['id']; 
		// }
	}
	$id++;
	$result = mysqli_query($conn,"INSERT INTO user(id,username,password,type) VALUES ('{$id}','{$username}','{$password}','普通用户');");
	$res = mysqli_query($conn,"INSERT INTO gerexinxi(id,username,sex,telephone,qq,weixin,gongsi,zuoyouming,address,email) VALUES ('{$id}','{$username}','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写');");
	if($result == 1 && $res == 1){
		echo 'ok';
	}else{
		echo 'wrong';
	}
 ?>