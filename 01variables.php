
<?php 
	echo "hello word";
	// 单行注释
	# 单行注释

	/* 多行注释  alt+command+/
		可以换行*/

	echo '<br>';
	// 变量variable
		$output="hello world";
		echo $output;
	/*  
		前缀  $
		区分大小写
	*/

	echo '<br>';
	// 数据类型
	/*
		String  Integer Float Boolean Array Object  Resourse(函数)
	*/
	$bool=true;
	echo $bool;
	if($bool){
		echo "123";
	}

	echo '<br>';

	// 运算符
	$num1=10;
	$num2=20;
	$sum=$num1+$num2;
	echo $sum;

	echo "<br>";

	// 字符串拼接
	$str1="hello";
	$str2="world";
	$str=$str1+$str2;//在php中+不能拼接,只能是数字相加
	echo $str;//0
	var_dump($str1);
	echo $str1." ".$str2;//用.拼接


	echo '<br>';
	// 引号的区别  单引号中的是字符串,原样输出.双引号中的可以解析
	$string='$str1 $str2';
	echo $string;
	echo '<br>';
	$str3="$str1 $str2";
	echo $str3;
	echo "<br>";

	// 转义字符
	$str4='They\'re here';
	echo $str4;

	$a=printf($str4);//是一个方法,返回一个数字,没有时会返回0
	echo "<br>";
	echo $a."<hr>";

	// 常量  常量名大写
	define("GREEN","green");
	echo GREEN;
	define("RED","red",true);
	echo RED.red;
	// 注意:第三个参数为true表示不区分大小写,默认为false


 ?>








