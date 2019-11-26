<?php
	//假设传来的用户id编号之类的
	$uid = 56;
	@$file = $_FILES['avatar'];
	var_dump($file);
	//调用专门上传图片的函数，参数只有文件名和保存目录
	if (!$file) {
		echo "文件大小超过限制或者未接受到文件";
		return;
	} 
	
	include_once 'imgupload.php';
	//1.文件名
	//1.1获取文件后缀
	$tmp = explode(".", $file['name']);
	$suffix = end($tmp);
	//1.2自定义文件名，比如这个代码时关于头像的可以叫 avatar-时间戳(或者使时间)-随机数
	$file['name'] = "avatar-".time()."-".mt_rand(0000,9999).".".$suffix;
	// $file['name'] = "aaa.jpg";
	// var_dump($file);
	//2.存储目录
	$path = "../upload/avatar/".$uid."/";
	// $path = "";
	$result = imgupload($file,$path);
	// var_dump($result);
	if ($result == 0) {
		var_dump($result);
	} else {
		echo $result;
	}
	
