<?php
	@$file = $_FILES['avatar'];
	var_dump($file);
	//调用专门上传图片的函数，参数只有文件名和保存目录
	if ($file) {
		echo "1";
		# code...
	} else {
		echo "文件大小超过限制";
		# code...
	}
	