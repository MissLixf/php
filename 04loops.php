<?php 
	// 循环loops
	/*
		for
		while
		do..while
		foreach
	*/
	// for
	// params - init,condition,inc
	// for ($i=0; $i < 10; $i++) { 
	// 	echo ($i+1)."<br>";
	// }

	//while
	// parames - condition
	// $i=0;
	// while ($i < 10) {
	// 	echo $i."<br>";
	// 	$i++;
	// }

	// do...while
	// params - condition
	// $i=0;
	// do{
	// 	echo $i."<br>";
	// 	$i++;
	// }while($i<10);


	// foreach
	$people=array("a","b","c","d");
	foreach ($people as $key=>$person) {
		echo $key." ".$person."<br>";
	}

	// $people=array(
	// 	"hurry"=>"123.com",
	// 	"mary"=>"345.com",
	// 	"tom"=>"4456.com"
	// );
	// foreach ($people as $key=>$value) {
	// 	echo $key." ".$value."<br>";
	// 	//echo $value;//若只有一个参数时,默认是value值
	// }


 ?>








