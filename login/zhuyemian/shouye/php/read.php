<?php 
	if (isset($_GET["paixu"])) {
		$paixu = $_GET["paixu"];
	}else{
		$paixu = 1;
	}
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"bjgl");
	mysqli_query($conn,"SET NAMES UTF8");
	//根据排序的值，决定正序还是倒叙
	if ($paixu) {
		$sql = "SELECT * FROM addnews";
	}else{
		$sql = "SELECT * FROM addnews ORDER BY id DESC";
	}
	$result = mysqli_query($conn,$sql);
	//存放结果的数组
	$arr = array("jieguo"=>array());
	while($row = mysqli_fetch_array($result)){
		array_push($arr["jieguo"],json_encode($row));
	}
	$json = json_encode($arr);
	print_r($json);
	mysqli_close($conn);

 ?>