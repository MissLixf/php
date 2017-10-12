
<div class="container">
	<?php  
		// if(filter_has_var(INPUT_POST, "data")){
		// 	echo "data exist";
			// $email=$_POST["data"];
			// print_r($_POST);
			// echo $email;
			//过滤掉不合法的字符
			// $email=filter_var($email,FILTER_SANITIZE_EMAIL);//对变量操作
			// echo "<br>";
			// echo $email;
			// echo "<br>";
		//验证时候是有效的邮箱
		// 	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		// 		echo '有效';
		// 	}else{
		// 		echo "不合法";
		// 	}
		// }else{
		// 	echo "no";
		// }


	// filter_has_var(type, variable_name);//判断是否有变量
	// filter_var(variable)//对变量操作,
	//$email=filter_var($email,FILTER_SANITIZE_EMAIL);过滤$email中的不合法字符
	//filter_input(type, variable_name);//对输入框的内容操作
	//filter_input(INPUT_POST,$email,FILTER_VALIDATE_EMAIL);//验证是否是邮箱



/*
		审核/过滤(去掉不合法的字符)
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证,验证通过返回被验证的东西,不成功返回false
		FILTER_VALIDATE_BOOLEAN (validate_boolean)
		FILTER_VALIDATE_EMAIL	(validate_email)
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/

		#验证变量是否是合法的数值,纯数字字符串也合法
		// $var ='23';
		// if(filter_var($var,FILTER_VALIDATE_FLOAT)){
		// 	echo "合法";
		// }else{
		// 	echo '不合法';
		// }

		//特殊字符
		// $var1="<script>alert(1)</script>";
		// echo filter_var($var1,FILTER_SANITIZE_SPECIAL_CHARS);//<script>alert(1)</script>

		// //验证数组中每个元素
		// $filters=array(
		// 	"data"=>FILTER_VALIDATE_EMAIL,
		// 	"data2"=>array(
		// 		'filter'=>FILTER_VALIDATE_INT,
		// 		'options'=>array(
		// 			'min_range'=>1,
		// 			'max_range'=>150
		// 		)
		// 	)
		// );
		// print_r(filter_input_array(INPUT_POST,$filters));


// 验证form表单中input的内容
// 1:email
// 2:数值,不能小于,大于150

	if(filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL) and filter_input(INPUT_POST, "data2",FILTER_VALIDATE_INT) and $_POST['data2']>1 and $_POST['data2']<150){
		echo "data是email,data2是数字";
	}

	$arr=array(
		"name"=>"honyt",
		"age"=>"30",
		"email"=>"123@qq.com"
	);

	$filters=array(
		"name"=>array(
			"filter"=>FILTER_CALLBACK,
			"options"=>"ucwords"
		),
		"age"=>array(
			"filter"=>FILTER_VALIDATE_INT,
			"options"=>array(
				"min_range"=>1,
				"max_range"=>100
			)
		)
	);
	print_r(filter_var_array($arr,$filters));



	?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>filters / 过滤器</title>

</head>
<body>
	<br>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="data" class="form-control">
			<input type="text" name="data2" class="form-control">
			<input type="submit" class="btn btn-primary btn-block">
		</form>
	</div>
</body>
</html>