<?php
	//自操作运算符
	//自动操作的运算方式
	//++和-- 	自增和自减，在原来的值上加1和减1
	//前置操作：++$i 	先自我运算，然后把最终自己的结果给其他运算
	//后置操作：$i++		后自我运算，先把自己的值给其他运算
	
	$age = 10;
	//年龄每年都会增长
	echo($age++);//10 先把自己的值给别人用，在自增
	echo("<br>");
	echo($age);//11 自增完事了

	echo("<br>");
	$b = 100;
	echo(++$b);

	
