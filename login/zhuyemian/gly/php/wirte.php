<?php 
	$content = $_POST['content'];
	//$time = $_POST['time'];

	// 设置时区
	//set获取当前设置时区
	date_default_timezone_set("Asia/Shanghai");
	//设置时间格式
	$time = date("y-m-d H:i:s",time());
	
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"bjgl");
	mysqli_query($conn,"SET NAMES UTF8");

	//插入数据
	$result = mysqli_query($conn,"INSERT INTO addnews(content,time) VALUES ('{$content}','{$time}');");
	if ($result == 1) {
		echo "ok";
	}else{
		echo "wrong";
	}
	mysqli_close($conn);


 ?>