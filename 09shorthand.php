<?php 
	$loggedIn=true;
	$names=["a","b","c"];
	/*
	if($loggedIn){
		echo "right";
	}else {
		echo "wrong";
	}
	// 三目运算符
	$str=$loggedIn?"right":"wrong";
	echo $str;

	// 简写
	$isRegistered = $loggedIn?true:false;
	echo $isRegistered;
	*/	
 ?>

 <!-- html和php嵌套 -->
 <div>
 	<?php if($loggedIn){?>
 	<p>welcome to Beij</p>
 	<?php }else{ ?>
 	<p>this is beij</p>
 	<?php } ?>
 </div>
 <!-- 优化 -->
 <div>
 	<?php if($loggedIn):?>
 	<p>welcome to Beij</p>
 	<?php else: ?>
 	<p>this is beij</p>
 	<?php endif ?>
 </div>


 <div>
 	<h1>
 	<?php 
	 	if($loggedIn):
	 	echo "welcome to Beij";
	 endif;
 	?>	
 	</h1>
 </div>

 <!-- 遍历foreach -->
 <div>
 	<?php foreach($names as $val):?>
 		<p><?php echo $val; ?></p>
 	<?php endforeach ?>
 </div>
<!-- 遍历数组 for -->
<div>
	<?php for($i=0;$i<count($names);$i++): ?>
	<p>
		<?php echo $names[$i]; ?>
	</p>
	<?php endfor; ?>
</div>

















