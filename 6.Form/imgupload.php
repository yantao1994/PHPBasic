<?php
	/**
	 * [imgupload description]
	 * @param array $file 要上传的文件信息，包含5格元素
	 * @param string $path 要保存的路径
	 * 此函数有两个固定值：1.问价类型，文件大小
	 * 调用此方法前要确定$file有值
	 */
	function imgupload($file,$path){

		if (!$file['name']) {
			$error = "未指定存储文件名";
			return $error;
		}
		if(!$path){
			$error = "未指定存储目录";
			return $error;
		}		
		if ($file['error'] == 0) {
			//没有错误，执行转存，判断文件是否已经存在。不过我们这种存储方式应该不存在已存在情况
			//目标目录存在
			if (@!file_exists($path)) {
				# code...
				$error = "目录不存在";
				/**
				 * 创建目录的操作，谁叫我想一个用户一个目录呢
				 * 
				 */
			}
			//目标文件存在
			if (file_exists($path.$file['name'])) {
				$error = "该文件已存在";
				return $error;
			}
			//执行转存
			$res = move_uploaded_file($file['tmp_name'], $path.$file['name']);
			return $res;
				

			
			
		} else {
			//有错误。返回信息

		}
		
		return  0;
		//文件类型
		$type = array('jpg','png');

		//文件大小2M
		$size = 2000000;

		//1.判断$file变量有效

		//2.判断$path是否存在

				
		//3.$file['error']判断
		

	}