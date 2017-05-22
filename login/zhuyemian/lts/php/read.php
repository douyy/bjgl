<?php 
	// header('Content-type:application/json');
	
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'set names utf8');

	$res = mysqli_query($conn,"select * from liaotianshi order by id asc");
	
	// 设置返回的数据
	$arr = array('result'=>array());
	while ($row = mysqli_fetch_array($res)) {
		array_push($arr['result'], json_encode($row));
	}
	$json = json_encode($arr);
	print_r($json);

	mysqli_close($conn);
 ?>