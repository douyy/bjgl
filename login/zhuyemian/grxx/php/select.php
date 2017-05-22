<?php 
	$id = $_GET['id'];
	$username = $_GET['username'];

	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result = mysqli_query($conn,"SELECT * FROM gerexinxi WHERE id = '{$id}';");
	// $number = mysqli_num_rows($result);

	// if ($number == 0) {
	// 	$res = mysqli_query($conn,"INSERT INTO gerexinxi(id,username,sex,telephone,qq,weixin,gongsi,zuoyouming,address,email) VALUES ('{$id}','{$username}','未填写','未填写','未填写','未填写','未填写','未填写','未填写','未填写');");
	// 	 if ($res == 1) {
	// 		$res1 = mysqli_query($conn,"SELECT * FROM gerexinxi WHERE id = '{$id}';");
	// 		$arr = array('result' => array());
	// 		while($row = mysqli_fetch_array($res1)){
	// 			array_push($arr['result'],json_encode($row));
	// 		}
	// 		$obj = json_encode($arr);
	// 		print_r($obj);
	// 	}
	// }else{
	$arr = array('result' => array());
	while($row = mysqli_fetch_array($result)){
		array_push($arr['result'],json_encode($row));
	}
	$obj = json_encode($arr);
	print_r($obj);
	// }
	mysqli_close($conn);
 ?>