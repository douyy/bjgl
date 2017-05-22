<?php 
	$username = $_POST['username'];
	header('Content-type:application/json');
	$content = $_POST['content'];

	if ($content == '') {
		echo '{"result":"empty"}';
		exit();
	}

	$conn = mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'bjgl');
	mysqli_query($conn,'set names utf8');

	$res = mysqli_query($conn,"INSERT INTO liaotianshi(username,content) VALUES('{$username}','{$content}')");

	// echo "INSERT INTO chat(username,content) VALUES('{$username}','{$content}')";
	if ($res == 1) {
		echo '{"result":"ok"}';
	}else{
		echo '{"result":"wrong"}';
	}

	mysqli_close($conn);
 ?>