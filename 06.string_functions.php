<?php 

	


 # string functin: 处理字符串的函数
	# 返回字符串的一部分 substr	
	$output="hello word";
	// $output=substr($output, 1);
	echo $output;

	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output)."<br>";

	# 查找字符串首次出现的位置 strpos
	echo strpos($output,"ll",3),"<br>";//从3开始查找.包括3
	
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	echo strrpos($output,"o");//7
	
	# 去除首尾空格trim
	$str="   hello ";
	echo strlen($str);//9
	$str=trim($str);
	$str1=trim($str,"heo");
	echo $str1,"<br>";//ll,可以从两边消除两边指定字符(只能消除是两边,不能直接消除中间的字符)

	
	# 将字符串转为大写 strtoupper
	
	
	# 将字符串转为小写 strtolower
	
	
	# 将每个单词首字母大写 ucwords
	$str2="hello";
	echo ucwords($str2),"<br>";
	
	# 替换所有匹配的内容  str_replace
	$text="hello word";
	$ou=str_replace("word", "everybody", $text);
	echo $ou,"<br>";
	
	
	# 判断是否是字符串  is_string
	$value='10abc';
	echo is_string($value);//1
	echo is_numeric($value);//1  是否是纯数字
	echo "<hr>";
	
	# 过滤掉数组中非字符串的值
	$values=array(true,false,12,45,"hello"," ",0,"0");
	foreach ($values as $value) {
		if(is_string($value)){
			echo $value,"<br>";
		}
	}
	
	
	echo "<hr>";
	# 压缩字符串  gzcompress
	$string="文字";
	echo gzcompress($string);
	
	# 解压字符串 gzunompress
	echo gzuncompress(gzcompress($string));
	echo "<hr>";
?>









