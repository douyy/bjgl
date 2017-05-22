<?php 

	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result = mysqli_query($conn,"SELECT * FROM gerexinxi");
	$arr = array('result' => array());
	while($row = mysqli_fetch_array($result)){
		array_push($arr['result'],JSON_encode($row));
	}
	$obj = JSON_encode($arr);
	print_r($obj);
	mysqli_close($conn);
 ?>