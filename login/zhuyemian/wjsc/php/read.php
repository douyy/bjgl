<?php 
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');
	$result = mysqli_query($conn,"SELECT * FROM wenjianshangchuang;");
	//数据架构
	$arr = array('jieguo' =>array());
	while($row = mysqli_fetch_array($result)){
		array_push($arr['jieguo'], json_encode($row));
	}
	$json = json_encode($arr);

	print_r($json);
	//
	mysqli_close($conn);
 ?>