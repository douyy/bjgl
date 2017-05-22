<?php 
	$username = $_GET['username'];
	$password = $_GET['password'];
	$type = $_GET['type'];
	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'SET NAMES UTF8');

	$result = mysqli_query($conn,"SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' AND type = '{$type}';");
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		while ($row = mysqli_fetch_array($result)) {
			echo $row['id'];
		}	
	}else{
		echo "wrong";
	}
	mysqli_close($conn);
 ?>