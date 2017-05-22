<?php 
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result = mysqli_query($conn,"DELETE FROM gerexinxi WHERE id = '{$id}';");
	$re = mysqli_query($conn,"DELETE FROM user WHERE id = '{$id}';");
	if($result == 1){
		echo "ok";
	}else{
		echo 'wrong';
	}
	mysqli_close($conn);
 ?>