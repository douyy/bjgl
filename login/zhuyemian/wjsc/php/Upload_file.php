<?php 
	//1确定允许上传的文件
	$allowEcts = array('gif','jpeg','jpg','png','txt','html','zip','doc','ps','	ppt','	js');
	$temp = explode(".", $_FILES['file']['name']);
	///文件大小
	echo $_FILES['file']['size'];
	//获取文件后缀
	$extension =end($temp);
	//print_r($_FILES['file']);
	//判断文件类型S 合法性
		if((
			($_FILES['file']['type'] == 'image/gif')
			||($_FILES['file']['type'] == 'image/jpg')
			||($_FILES['file']['type'] == 'image/jpeg')
			||($_FILES['file']['type'] == 'image/x-png')
			||($_FILES['file']['type'] == 'image/gif')
			||($_FILES['file']['type'] == 'image/pjpeg')
			||($_FILES['file']['type'] == 'image/png')
			||($_FILES['file']['type'] == 'text/plain')
			||($_FILES['file']['type'] == 'text/html')
			||($_FILES['file']['type'] == 'application/msword')
			||($_FILES['file']['type'] == 'application/postscript')
			||($_FILES['file']['type'] == 'application/vnd.ms-powerpoint')
			||($_FILES['file']['type'] == 'application/x-javascript')
			||($_FILES['file']['type'] == 'application/zip'))
			&&($_FILES['file']['size'] < 2048000000000)//文件小于200k
			&&in_array($extension, $allowEcts))//判断当前文件是不是我们想求的文件后缀
			//此时的文件是合法文件
			{
				if ($_FILES['file']['error'] >0) {
					// echo "错误".$_FILES['file']['error'] . "<br/>";
					 echo $_FILES['file']['error'];
				}else{
					$array = array("filename" => $_FILES['file']['name'],"filetype" => $_FILES['file']['type']);
					echo json_encode($array);

					// echo "上传文件名" .$_FILES['file']['name'] . "<br/>";
					// echo "文件类型" .$_FILES['file']['type'] . "<br/>";
					// echo "上传大小" .$_FILES['file']['size'] /1024 . "<br/>";
					// echo "文件临时存储位置" .$_FILES['file']['tmp_name'] . "<br/>";
					// echo $_FILES['file']['type'] ."<br/>";
					// echo "<a href='../shangchuan.html'>回到上传页面</a>" ."<br/>";
					//我们要将
					//判断当前目录下是否存在 Upload文件夹 
					//如果没有需要创建这个文件夹 ，设置权限为777
					if (file_exists('upload/'.$_FILES['file']['name'])) {
						// echo $_FILES['file']['name'] . '文件已存在';
						//echo $_FILES['file']['name'];
					}else{
						//如果当前上传的文件在upload文件夹中不存在，就将文件上传至Upload文件夹
						//将一个文件移动到另一个位置，存储为什么样的格式
						move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' .$_FILES['file']['name']);
						// echo "文件存储在：".'upload/' .$_FILES['file']['name'];

					}
				}

		}
		else{
			echo "文件格式不正确";
		}
 ?>
 