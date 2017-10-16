
<?php 
	$msg="";
	$msgClass="";
	// 验证有没有触发提交按钮
	if(filter_has_var(INPUT_POST,'submit')){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		// 验证输入的是否为空
		if(!empty($name) && !empty($email) && !empty($message)){
			if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
				$msg="请输入合法邮箱";
				$msgClass="alert-danger";
			}else{
				$toEmail='1090474924@qq.com';
				$subject='主题';
				$body="<h2>BJH170705拓展</h2>
					<h4>姓名:{$name}</h4>
					<h4>姓名:{$email}</h4>
					<h4>姓名:{$message}</h4>
				";
				// var_dump($body) ;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
				$headers.="发自".$name."<".$email.">". "\r\n";
				// 判断邮件发送成功
				if(mail($toEmail,$subject,$body,$headers)){
					$msg="发送成功";
					$msgClass="alert-success";
				}else{
					$msg="邮件发送失败";
					$msgClass="alert-danger";
				}
			}
		}else{
			$msg="请输入内容";
			$msgClass="alert-danger";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Mail Sender</title>
	<!-- <link rel="stylesheet" href=""> -->
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<!-- 导航 -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">邮件发送</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<!-- 提示 -->
		<?php if(!empty($msg)): ?>
			<div class="alert <?php echo $msgClass;?> ">
				<?php echo $msg ?>
			</div>
		<?php endif; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="form-group">
				<label for="">name</label>
				<input type="text" class="form-control" name="name" value="<?php echo isset($name)?$name:''?>" >
			</div>
			<div class="form-group">
				<label for="">email</label>
				<input type="text" class="form-control" name="email" value="<?php echo isset($_POST['email'])?$email:''?>">
			</div>
			<div class="form-group">
				<label for="">message</label>
				<textarea name="message" class="form-control" ><?php echo isset($_POST['message'])?$message:''?></textarea>
			</div>
			<input name="submit" type="submit" class="btn btn-info btn-block" value="提交" />
		</form>
	</div>
</body>
</html>