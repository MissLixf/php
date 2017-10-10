<?php 
	// 分支 if switch
	// 条件  关系运算符 > < == != >= <= !==
	// $num=2;
	/*if($num<=4){
		echo '小于等于4';
	}*/


	/*if ($num>=4) {
		echo "true";
	}else{
		echo "false";
	}*/


	// nesting if  if嵌套
	// $num=4;
	// if($num>=4){
	// 	if($num<=10){
	// 		echo "num is between 4 and 10";
	// 	}else{
	// 		echo "num is bigger than 10";
	// 	}
	// }else{
	// 	echo "num is smaller than 4";
	// }

	// 逻辑运算符  && || ! 
	//  php逻辑   and  or  xor(异或)   不区分大小写
	$num=3;
	if($num>2 xor $num<3){
		echo "$num>3and<10",'<br>';
	}
	/*
		and:一假即假
		or:一真即真
		xor:只有一个为真结果才为真
	*/

	// switch
	$color=1;
	switch($color){
		case '1'://成立   在php里判断的是==   在js里不成立 js里判断的是===
			echo "angry";
			break;
		case 'yellow':
			echo 'happy';
			break;
		default:
			echo 'gun';
			break;
	}

 ?>









