<?php 
//数组:存储大量类型相同的数据的集合

// 数组分为:下标数组:以0开始
		// 关联数组:以第一个名字开头

// 下标数组
	// $people=array("KEVIN","HUNRY","Mary");
	// echo $people[1];
	//echo $people[3];//数组越界会报错
	// $ids=[23,34,45];
	$cars=["Honda","ofo","BYD"];
	// $cars[3]="BMW";
	// print_r($cars);
	// echo count($cars);//返回数组长度
	// var_dump($cars);
	// echo "<hr>";
	


//关联数组
	$people=array("heray"=>35,0=>23,"bukcy"=>25,"Emily"=>20);
	//echo $people["Emily"];//20
	$ids = [22=>"Mary",24=>"bucky"];
	// echo $ids[22];
	$ids[35]="join";
	// echo $ids[35]
	print_r($ids);
	echo '<br>';

// 注意:
	$cars[]="Bence";//下标数组,不写下标时自动在前一个基础上加1
	print_r($cars);
	echo "<hr>";
	$ids[]="Eaaa";//关联数组,不写下标时,若前一个的键值是数字,自动在前一个基础上加1,若不是就一直往前找,若没有以数字开头的键值就从0开始
	print_r($ids);
	echo "<hr>";
	$people[]=90;//关联数组
	print_r($people);
	echo "<hr>";

//多维数组
	$csrss=array(
		array("Honda",20,10),
		array("daz",20,20),
		array("ford",15,10)
	);
	// $csrss=[[],[]]
	echo $csrss[2][1];//15

 ?>













