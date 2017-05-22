<?php 
	$name = $_POST['name'];
	$type = $_POST['type'];
	$username = $_POST['username'];
	$pingjia = $_POST['pingjia'];
	
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');

	//插入数据
	//$result =mysqli_query($conn,"INSERT INTO liaotianshi(username,content) VALUES ('{$name}','{$type}';)");
	$result = mysqli_query($conn,"INSERT INTO wenjianshangchuang(name,type,pingjia,username) VALUES ('{$name}','{$type}','{$pingjia}','{$username}');");
	if ($result == 1) {
	 	echo "ok";
	}else{
	 	echo "wrong";
	}
	//
	mysqli_close($conn);
 ?>