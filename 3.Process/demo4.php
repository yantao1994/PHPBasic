<?php
	//foreach 循环只适用于数组，并用于便利数组中的每个键值
	/**
	foreach ($array as $key => $value) {
		# code...
	}
	*/
	//每进行一次迭代，当前数组元素的值就会被赋值给$value变量，并且指针会逐一移动，知道到达最后一个数组
	$colors = array('red','green','blue');
	foreach ($colors as $key => $value) {
		echo $value."<br>";
	}