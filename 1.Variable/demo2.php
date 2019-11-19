<?php
	//系统为了方便程序员开发，将很多需要用户和麻烦操作的变量制成了系统变量，用户直接调用就能获取相应的结果。预定义变量通常都是数组数据

	/**
		$_GET:		用户通过get方式提交的数据
		$_POST:		用户通过POST方式提交的数据
		$_REQUEST:	用户通过get和post方式提交的数据
		$_SERVER:	用户和服务器的基本信息数据
		$_FILES:	用户提交的文件数据
		$_SESSION:	session数据
		$_COOKIE:	cookie数据
		$_ENV:		树精数据
		$GLOBALS:	所有全局变量，唯一没有下划线的
	*/

	var_dump($_SERVER);