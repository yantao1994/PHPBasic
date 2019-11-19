<?php
	//if语句		如果指定条件为真则执行代码
	if(1 > 0){
		echo '1 > 0';
	}
	echo "<br>";
	//if...else语句	如果条件为 true，则执行代码；如果条件为 false，则执行另一端代码
	if (0 > 1) {
		echo "0 > 1";
	} else {
		echo "0 < 1";
	}
	echo "<br>";
	//if...elseif
	$i = 5;
	if ($i == 0) {
		echo "$i = 0";
	} elseif($i == 1) {
		echo "$i = 1";
	}else {
		echo '$i不等于0，也不等于1';
	}
	
	
	




	//switch分支
	//如果您希望有选择地执行若干代码块之一，请使用 Switch 语句。
	//使用 Switch 语句可以避免冗长的 if..elseif..else 代码块。

	/**
	 *工作原理：
	 *1.条件变量不是一个运算，是一个纯粹的变量
	 *2.把表达式的值与结构中 case 的值进行比较
	 *3.如果存在匹配，则执行与 case 关联的代码
	 *4.代码执行后，break 语句阻止代码跳入下一个 case 中继续执行
	 *5.如果没有 case 为真，则使用 default 语句，没有default的话，表示没有匹配到的话就不做任何事
	 */

	$choice = 'alipay';

	switch ($choice) {
		case 'wxpay':
			echo "微信支付";		
			break;
		
		case 'alipay':
			echo "支付宝支付";		
			break;

		case 'money':
				echo "现金支付";				
				break;	
		default:

			break;
	}

	//switch与if区别
	//1.switc的条件只能是变量。if的条件可以是运算表达式，也可以是变量
	//2.if的条件是从第一个开始挨个匹配，而switch的逻辑不一样，不需要挨个匹配，是直接到达目标case。（因此多条件用switch，少条件使用if）
	//3.if分之永远最多只能执行一个代码块，switch在不使用break时可以执行多个代码块
	
	




