<script>
	function amin(a){
		console.log(a);//undefined
	}
	amin();
</script>
<?php 

	#function :具有某一功能的代码块
	/*  命名方法:
		Camel case :myFunction
		Lower Case : my_function
		Pascal Case : MyFunction
	*/
	// 注意:函数一定有返回值,默认返回undefine


	simpleFunction();//可以在定义之前调用
	//定义函数
	function simpleFunction(){
		echo 'hello word';
	}
	SimpleFunction();//php中函数名不区分大小写
	echo '<hr>';

	// 有参数无返回值
	function buy($money=10){
		echo $money."<br>";
	}
	buy();//在php中若函数有参数,调用时必须有参数或有默认参数,没有时会报错,js中不会报错

	//多参有返回值
	function sumValue($num1,$num2=7){
		$sum=$num1+$num2;
		return $sum;
	}
	$sum=sumValue(5);
	echo $sum,"<br>";

	// 无参数有返回值
	function buyDrink(){
		return '';
	}

	//函数传引用
	$myNum=10;
	function addFive(&$num){//传的是地址,会改变$myNum的值
		$num+=5;
	}
	addFive($myNum);
	echo $myNum;//15



 ?>















