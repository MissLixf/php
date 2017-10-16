<?php 
	$alertMes="";
	$alertClass="";
	if(filter_has_var(INPUT_POST,'submit')){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		if(!empty($name) && !empty($email) &&!empty($message)){
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$alertMes="正确";
				$alertClass="alert-success";
			}
		}else{
			$alertMes="	请输入对应信息";
			$alertClass="alert-danger";
		}
	}

 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
 </head>
 <body>
 	 <?php if(!empty($alertMes)):?> 
 	<div class="alert <?php echo $alertClass ?>">
 		<?php echo $alertMes ?>
 	</div>
 	<?php endif; ?> 
 	<nav class="navbar navbar-default">
 		<div class="container">
 			<div class="navbar-header">
 				<a href="#" class="navbar-brand">发送邮件</a>
 			</div>
 		</div>
 	</nav>
 	<div class="container">
 		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
 			<div class="form-group">
 				<label for="">name</label>
 				<input type="text" class="form-control" name="name" value="<?php echo isset($name)?$name:"" ?>" >
 			</div>
 			<div class="form-group">
 				<label for="">email</label>
 				<input type="text" class="form-control" name="email" value="<?php echo isset($email)?$email:"" ?>">
 			</div>
 			<div class="form-group">
 				<label for="">message</label>
 				<textarea name="message" class="form-control"><?php echo isset($message)?$message:"" ?></textarea>
 			</div>
 			<input type="submit" value="提交" name="submit" class="btn btn-success btn-block">
 		</form>
 	</div>
 </body>
 </html>