<?php
	//定义常量
	//方式1：define()函数
	define('PI', 3.14);

	//方式2：const 关键字
	const P = 3.1415;

	//访问常量
	echo PI;
	echo P;
	echo "-------------";
	echo constant('PI');