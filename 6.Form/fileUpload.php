<?php
	//封装文件上传的函数
	//1.明确上传函数可能变换的内容：文件来源，保存保存位置，文件大小，文件类型。明确后作为参数传入
	//2.明确要返回的结果：出错返回fales，成功返回路径（错误信息通过参数外传）
	
	/**
	 * @param array $file 要上传的文件信息，包含5格元素
	 * @param string $path 存储位置
	 * @param string $error 错误信息
	 * @param array $type = array(),MIME类型限定
	 * @param int $size = 20000 默认2M
	 * @return mixed 成功返回文件名，失败返回false
	 */
	
	function fileupload($file,$path,&$error,$type = array(),$size = 20000){
		//1.判定文件本身是有效的
		if (isset($file['error'])) {
			$error = '文件无效'；
			return false;
		}

		//2.有效路径判定
		if (isset($path)) {
			$error = '存储路径无效'；
			return false;
		}

		//3.判定文件本身上传是否成功
		switch ($file['error']) {
			case 1:
				$error = '文件超过服务器允许大小'；
				return false;
			case 3:
				$error = '文件只有部分成功'；
				return false;
			case 4:
				$error = '用户没有选择要上传的文件'；
				return false;
			case 6:
				$error = '服务器操作失败'；
				return false;
			case 7:
				$error = '服务器操作失败'；
				return false;
		}

		//4.判定类型是否符合
		//有判定要求 & 符合要求
		if (!empty($type) && in_array($file['type'], $type)) {
			$error = '不允许的文件类型';
			return false;
		}

		//5.大小判定
		if ($file['size'] > $size) {
			$error = '文件大小超过'.string($size/1000000).'M';
			return false;			
		}
	}