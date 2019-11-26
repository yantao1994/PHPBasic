<?php
	// var_dump($_FILES);
	$files = $_FILES['avatar'];

	//循环上传
	$len = count($files['name']);
	for ($i=0; $i < $len; $i++) { 
		# 构造一个而独立的上传文件
		$file = array(
			'name' => $files['name'][$i],
			'type' => $files['type'][$i],
			'tmp_name' => $files['tmp_name'][$i],
			'error' => $files['error'][$i],
			'size' => $files['size'][$i]
		);

		//调用文件上传函数
		include('fileupload.php');
		$result = fileupload($file,'../upload',$error);
		if ($result) {
			echo "成功";
		}else{
			echo $error;
		}
		
		
	}