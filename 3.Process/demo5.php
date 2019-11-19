<?php
	//循环控制
	//continue 跳continue后面的代码，继续执行下一次循环

	//求1到10之间所有奇数的和
	$res =  0;
	for ($i=1; $i <=10; $i++) { 
		if ($i % 2 ==0) {
			echo "$i.被跳过了";
			continue;			
		}
		$res += $i;
	}
	echo $res;echo "<br>";
	
	//break　结束所有循环
	$res2 =  0;
	for ($x=1; $x <=5; $x++) { 
		if ($x > 3) {
			echo "从".$x.结束的循环;
			break;
		}
		$res2 += $x;
	}
	echo $res2;