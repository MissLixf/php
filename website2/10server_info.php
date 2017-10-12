<?php 
	// $_SERVER[]:用于记录客户端和服务端配置信息
	
		# 服务器端数组信息
	$server=[
		"主机名"=>$_SERVER["SERVER_NAME"],
		"软件信息"=>$_SERVER["SERVER_SOFTWARE"],
		"文件根路径"=>$_SERVER["DOCUMENT_ROOT"],
		"绝对路径"=>$_SERVER["SCRIPT_FILENAME"],
		"当前路径"=>$_SERVER["PHP_SELF"]

	];
	echo $server["主机名"];
	echo $server["软件信息"];
	echo $server["文件根路径"],"<br>";
	echo $server["绝对路径"],"<br>";//当前文件的绝对路径
	echo $server["当前路径"],"<br>";//当前文件的绝对路径

	/*
		SERVER_NAME => 主机名
		SERVER_SOFTWARE => 服务器软件信息
		DOCUMENT_ROOT => 文档根路径
		SCRIPT_FILENAME => 绝对路径
		PHP_SELF => 当前路径
	*/
	$client=[
		"系统信息"=>$_SERVER["HTTP_USER_AGENT"],
		"客户端IP"=>$_SERVER["REMOTE_ADDR"],
		"端口号"=>$_SERVER["REMOTE_PORT"]
	];
	print_r($client);
	# 客户端数组信息
	/*
		HTTP_USER_AGENT => 客户端系统信息
		REMOTE_ADDR => 客户端IP
		REMOTE_PORT => 客户端端口号
	*/
 ?>