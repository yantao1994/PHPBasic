<?php
	//1.函数一定有返回值，如果用户指定就返回指定结果，否则返回null
	//2.接受返回值：哪里调用返哪里
	function cube($a)
	{
		return $a * $a * $a;
	}
	$res = cube(3);
	echo $res;