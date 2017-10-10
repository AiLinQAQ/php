<?php
	// echo "Hello World!";
	// 单行注释 快捷键：command + /
	// 单行注释 快捷键：shift + 3

	/*
	多行注释
	快捷键：alt + command + /
	*/

	#variable 变量

	$output = "Hello World!";
	/*
		- 前缀 $
		- 以字母、数字、下划线组成
		- 数字不能开头
		- 大小写敏感
		- 驼峰命名法
	*/
	echo $output;

  // 数据类型
  /*
    String Integer(数字) Floal Boolean(布尔值) Array(数组) Object Reso(函数)
  */
  $num=22;
  $Floal=22.22;
  $bull=false;//true 为1 false为空
  echo $bull;

  //运算符

  $num1=20;
  $num2=10;
  $sun=$num1+$num2;
  echo $sun;//30

  #字符串拼接
  $string1= "hello";
  $string2="World";
  $string=$string1 + $string2;//在php中+没有拼接功能
  $string=$string1 . $string2;//php中用点拼接字符串

  //php中引号的区别
  $greeting2='$string1 $string2';//单引号是单纯的字符串
  $greeting3="$string1 $string2";//双引号中的变量可以正常解析

  # 转义字符
  $greeting4='$string1\' $string2';//转义字符
  echo $greeting4;
  printf($greeting4);

  //常量
  defined("GREETING","Whatever!",true);//(常量名大写，给常量赋予的值，true(不区分大小写))

  var_dump(GREETING);
 ?>
