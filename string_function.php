<?php
# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
  $output = "hello world";
  // $output = substr($output,1,5)
  // echo $output;

	# 返回给定的字符串的长度 string 的长度  strlen
    // echo string($output);
	# 查找字符串首次出现的位置 strpos
    //  $output=strpos($output,"o")
    // echo $output;//4

	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
    // $output=strrpos($output,l)
	# 去除首尾空格trim
  // $output1="  dddd   "
  // $output1=trim($output1);
  // echo $output1;
	# 将字符串转为大写 strtoupper
  // $str=strtoupper($output1)
  // echo $str;
	# 将字符串转为小写 strtolower
  // $lowerStr=strtolower($str)
  // echo $lowerStr;
	# 将每个单词首字母大写 ucwords
  // $lowerStr=ucwords($str)
  // echo $lowerStr;

	# 替换所有匹配的内容  str_replace
// $output=str_replace("world","Everybodt",$output)//变量(要替换的字符串,替换的字符串,总共的字符串)
// echo $output;
	# 判断是否是字符串  is_string
  // $val="ture";
  // $output=is_string($output)
  // echo $output;
	# 过滤掉数组中非字符串的值
  $values=array(true,flase,"Hello",32,"23",23,4,"32.4","",0,"0"，'o')；
  foreach ($variable as $value) {
    if (is_string($values)) {
      # 判断数组是否是字符串如果是那么输出
      echo $values."这是一个字符串";
    }
  }
	# 压缩字符串  gzcompress
  // $str = "文字";
  // $compressed = gzcompress($output);
  // echo $compressed ;
	# 解压字符串 gzuncompress
  // $unCompressed = gzuncompress($compressed);
  // echo $compressed;
 ?>
