<?php
	//文件接收
	@$file =  $_FILES['myfile'];
	var_dump($file);
	/**
	D:\wamp64\www\PHPBasic\6.Form\demo7.php:3:
		array (size=1)
		  'myfile' => 
		    array (size=5)
		      'name' => string '谷歌.jpg' (length=10)
		      'type' => string 'image/jpeg' (length=10)
		      'tmp_name' => string 'D:\wamp64\tmp\php4956.tmp' (length=25)
		      'error' => int 0
		      'size' => int 19741
      **/

	/**
	 name：文件在客户端时的名字
	 type：文件的类型
	 tmp_name：文件在服务器操作系统接受后保存的临时文件名（默认时系统的临时文件存储目录，可以通过php配置文件修改）
	 error:错误代码
	 0：没有发生错误
	 1：文件超过了php配置文件的限制
	 2：文件超过了HTML表单大小，但是W3C并没有采纳这个标准，所以不会发生
	 3：文件只有部分上传，网络问题
	 4：文件没有被上传，用户在浏览器没有选择文件
	 6：找不到临时文件夹
	 7：文件写入失败，Linux没有给权限
	 5：PHP保留的代号
	 size：文件大小（字节）
	 */
	

	//文件时操作系统临时接收的，保存在临时目录下。如果PHP不做处理，那么系统就会认为数据没有意义，指定清楚。因此PHP需要将临时文件惊醒目标转移，转移到指定位置。使用函数 move_uploaded_file(临时路径，目标路径)目标存储位置需要重命名（因为临时文件名后最为tmp）
	
	//简单判定
	 // if ($file['error'] == 0) {
	 // 	//事先建立upload目录
	 // 	move_uploaded_file($file['tmp_name'],'../upload/'.$file['name']);
	 // }


	 //调用问价上传函数
	 if (!$file) {
	 	echo "文件无效";
	 	return;
	 }
	 include_once 'fileupload.php';
	 $result = fileupload($file,'../upload',$error);
	 if ($result) {
	 	echo "成功";
	 } else {
	 	echo $error;
	 }
	 