<?php
	//PHP函数要求是函数必须咋内存中才能调用
	//如果想要使用其他地方已经写好的函数，只需在当前运行的文件引入那个文件即可

	//文件包含
	//1.include '文件'
	//2.include_once '文件'
	//3.require '文件'
	//4.require_once '文件'


	//1.include 和require的区别： 如果要包含的文件不存在，include们报警告错误，单是代码继续执行；require们报致命错误，终止运行
	//2._once和没有_once: 加载一次之后，就不会重复加载这个文件了

	
	//向上包含：我用别人	

	//一定要先引入后使用
	//show();			//致命错误：未捕获错误：在 demo1.php中调用未定义函数show（）
	include 'common.php';
	show();				//正常运行

	echo PI;