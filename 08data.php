<?php 
	#至少要给一个参数
	//年月日
	echo date('d');//day  11
	echo date("m");//month  10
	echo date("Y");//year  2017
	echo date("y");//year  17
	echo date("l");//week

	echo date("Y-m-d");//2017-10-11
	echo "<hr>";
	//时分秒
	echo date("h");
	echo date("i");//分
	echo date("s");//秒
	echo date("a");//am or pm

	// 设置时区 东5,6,7,8,9 用的是北京时间  (处在东8区)
	date_default_timezone_set("Asia/Shanghai");
	echo date("h:i:s"),"<hr>";

	#mktime
	// $timestamp=mktime(07,00,12,1,24,1988);//时分秒 月日年
	$timestamp=mktime(1988,24,1,07,00,12);//时分秒 日月年
	echo $timestamp," ";
	echo date("m/d/Y h:i:s",$timestamp);
	echo "<hr>";
	$timestamp2=strtotime("7:00pm March 22 2016");
	echo $timestamp2;

	$timestamp3=strtotime("tomorrow");
	echo date("m/d/Y h:i:s",$timestamp3);
	$timestamp4=strtotime("+2 Days");
	echo date("m/d/Y h:i:s",$timestamp4),"<br>";

	echo date("m/d/Y h:i:s");

	// strtotime()和mktime()返回时间戳


 ?>












