<div class="container">
	<?php 
	/*
		if(isset($_GET["userName"])){//判断点了提交按钮后执行if里的代码,若username被设置了,则一定点了提交按钮,可用submit判断
			$name = $_GET["userName"];
			echo $_GET["userEmail"];
			print_r($_GET);
		}
	*/
		
// get方法传参数有大小限制,较小
// post较大

// isset($var);//判断是否被设置
// empty($var);//判断是否为空
//$_GET & $_POST & $_REQUEST:保存通过get或post方法提交的所有数据,即使是空(没输入),也会保存空

		if(isset($_REQUEST["userName"])){//判断点了提交按钮后执行if里的代码,若username被设置了,则一定点了提交按钮,可用submit判断
			$name = $_REQUEST["userName"];
			echo $_REQUEST["userEmail"];
			print_r($_REQUEST);
		}
#查询url地址后边的参数
	echo $_SERVER['QUERY_STRING'];//获得get方法url后拼接的数据,返回字符串格式
	 ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get & post</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="$_SERVER['PHP_SELF']" method="get">
			<div class="form-group">
				<label for="">name</label>
				<input type="text" class="form-control" name="userName">
			</div>
			<div class="form-group">
				<label for="">email</label>
				<input type="email" class="form-control" name="userEmail">
			</div>
			<br>
			<input type="submit" class="btn btn-primary btn-block" value="submit">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=guo"?>" class="btn btn-success btn-block">点击1</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=hu"?>" class="btn btn-info btn-block">点击2</a>
			</li>
		</ul>
		<h1><?php if(isset($_GET["name"])):echo $_GET["name"] ?>
			<?php endif ?>
		</h1>
	</div>
</body>
</html>