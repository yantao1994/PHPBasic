<?php
	//赋值运算符，吧右边的结果保存到左边
	
	//1. =	：最常见的赋值运算，吧右边的结果保存到左边
	//2. +=	 :左边与右边的运算结果（整体）相加，然后再把结果赋值给左边
	//3. -=|*=|/=	：略
	//4. .=	 :'.'是字符串连接操作符。表示左右字符串连接起来赋值给左边

	$num1 = 10;

	$num1 += 20;//$num1 = $num1 + 20

	//关于优先级
	$num2 = 10;
	$num2 *= 2 + 1;//$num2 = $num2 * (2 + 1)
	echo($num2);
