<?php
  //$_SERVER[]:用于记录服务端客户信息
  # 服务器端数组信息
  $server= ["主机名"=>$_SERVER['SERVER_NAME'],
              "软件信息"=>$_SERVER['SERVER_SOFTWARE'],
              "文档根路径"=>$_SERVER['DOCUMENT_ROOT'],
              "绝对路径"=>$_SERVER['SCRIPT_FILENAME'],
              "当前路径"=>$_SERVER['PHP_SELF']];
  #echo $_SERVER['SERVER_NAME']//主机名
  // echo $_SERVER["主机名"];//主机名
  // echo $_SERVER["软件信息"];//主机名
// var_dump($server);//设置端口号不要低于1000
  $client = [
    "用户代理"=>$_SERVER['HTTP_USER_AGENT'],
    "客户端IP"=>$_SERVER['REMOTE_ADDR'],
    "客户端端口号"=>$_SERVER['REMOTE_PORT']
  ];
  // var_dump($client)//设置端口号不要低于1000
	# 客户端数组信息
	/*
		HTTP_USER_AGENT => 客户端系统信息
		REMOTE_ADDR => 客户端IP
		REMOTE_PORT => 客户端端口号*/

 ?>
