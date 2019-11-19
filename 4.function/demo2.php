<?php
	//形参：定义函数时的虚拟数据
	//实参: 调用函数时传入的实际数值
	function cube($xing)
	{
		echo $xing * $xing * $xing;		
	}

	$i = 2;
	cube($i);

	//1.如果定义了形参，调用是必须传入实参，否则报错
	//2.实参的数量可以比形参多，但是不能比形参少
	function test($a)
	{
		echo "无法运行";
	}
	test();