<?php 
	$content = $_POST['content'];

	date_default_timezone_set('Asia/Shanghai');
	$time = date('y-m-d H:i:s',time());

	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result = mysqli_query($conn,"INSERT INTO liuyanbiao (time,content) VALUES ('{$time}','{$content}');");
	
	if ($result == 1) {
		echo "ok";
	}else{
		echo 'no';
	}
	mysqli_close($conn);
 ?>