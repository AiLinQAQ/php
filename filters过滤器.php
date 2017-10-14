Ï<div class="container">
	<?php
		/*问题
		三个函数的作用和参数的内容
		filter_has_var//判断是否存在
		filter_var//判断变量
		filter_input//判断iput内容
		*/

		# 检查是否存在data的name属性
		// if (filter_has_var(INPUT_POST, "data")) {//判断有没有data
    //   $email= $_POST["data"];
		// 	//过滤邮箱中不合法的内容
    //   $emeil=filter_var($email,FILTER_SANITIZE_EMAIL);//参数(要过滤的，过滤的规则)
		// 	echo $emeil;
    //   if (filter_var($email,FILTER_VALIDATE_EMAIL)){
    //     echo "邮箱合法";
    //   }else{
    //     echo "邮箱不合法";
    //   }
			// echo "data 存在！";
		// }else{
			// echo "data 不存在！";
		// }
		//验证一个变量中的值是否为合法的数值
		// $var="23a";
		// if(filter_var($var,FILTER_VALIDATE_INT)){
		// 		echo $var;
		// }else {
		// 		echo "不是数字";
		// };
		#获取字符串中所有的数值
		// $var = "31231a3da12d3123d21431242dada14sadasd";
		// var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT))

		#特殊字符
		// $var = "<script> alert(1)</script>";
		// // var_dump($var);
		// echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);//清除功能
		#验证表单中每一个元素
		// $filters=array(
		// 	"data"=>FILTER_VALIDATE_EMAIL,//规则1 是邮箱
		// 	"data2"=>array('filter'=>FILTER_VALIDATE_INT,
		// 									"options"=>array(
		// 										"min_range"=>1,//最小值
		// 										"max_range"=>150//最大值
		// 									),
		// 								),
		// );//数组规则
		//如果不符和数组规则的则不传入后台
	// print_r(filter_input_array(INPUT_POST,$filters));

	# 验证form表单中input的内容, 第一个input一定是email
	# 第二个input一定是数值,并且数值不能小于1,大于150
	// if (filter_has_var(INPUT_POST,"data")) {
	// 	$input=$_POST["data"];
	// 	if (filter_has_var(INPUT_POST,"data2")) {
	// 		$input2=$_POST["data2"];
	// 		if (filter_var($input2,FILTER_VALIDATE_INT)) {
	// 			echo "input2是数字";
	// 			if(filter_var($input2 >1 && $input2 < 150)){
	// 				echo "合法";
	// 			}else{
	// 				echo "不合法";
	// 			}
	// 		}else{
	// 			echo "input2不是数字";
	// 		};
	// 	};
	// 	if (filter_var($input,FILTER_VALIDATE_EMAIL)) {
	// 			echo "邮箱合法";
	// 	}else{
	// 			echo "邮箱不合法";
	// 	};
	// };

	#验证变量数组中每一个元素
	#filter_var_array
	$array = array(
		'name' =>'Henry',
		'age'=>'20',
		'email'=>'12313@xx.com'
		);
		$filters = array(
			'name' =>array(
				'filter' =>FILTER_CALLBACK,//回调
			 	'options'=>'ucwords'
			),
			 'age'=>array(
				 'min_range'=>1,
			  	'max_range'=>100,
				),
			"email"=> FILTER_VALIDATE_EMAIL,
		);
		var_dump(filter_var_array($array,$filters))
	 ?>
</div>
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <title>Filter / 过滤器</title>
  </head>
  <body>
    <div class="">
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="data" value="" class="form-control">
				<input type="text" name="data2" value="" class="form-control">
        <button type="submit" name="button" class="btn btn-primary btn-block">提交</button>
      </form>
    </div>
  </body>
</html>
<?php 	/*
		审核(过滤所有不符合规则的条件)
		FILTER_SANITIZE_EMAIL 验证邮箱
		FILTER_SANITIZE_ENCODED 过滤去除或 URL 编码不需要的字符
		FILTER_SANITIZE_MAGIC_QUOTES 过滤在预定义的字符串前面设置反斜杠。
		FILTER_SANITIZE_NUMBER_FLOAT 过滤器删除小数中所有非法的字符
		FILTER_SANITIZE_NUMBER_INT 过滤器删除数字中所有非法的字符
		FILTER_SANITIZE_SPECIAL_CHARS 过滤特殊字符进行 HTML 转义
		FILTER_SANITIZE_FULL_SPECIAL_CHARS 过滤对特殊字符进行 HTML 转义
		FILTER_SANITIZE_STRING 过滤去除或编码不需要的字符
		FILTER_SANITIZE_STRIPPED 过滤去除或编码不需要的字符
		$var="<b>Bill Gates<b>";——>string(13) "Bill Gates"
		FILTER_SANITIZE_URL 过滤器删除字符串中所有非法的 URL 字符。
		FILTER_UNSAFE_RAW 过滤器不进行任何过滤，去除或编码特殊字符

		验证(判断是否符合条件)
		FILTER_VALIDATE_BOOLEAN 过滤器把值作为布尔选项来验证。
		FILTER_VALIDATE_EMAIL 过滤器把值作为 e-mail 地址来验证。
		FILTER_VALIDATE_FLOAT 过滤器把值作为小数数来验证
		FILTER_VALIDATE_INT 过滤器把值作为整数来验证。
		FILTER_VALIDATE_IP 过滤器把值作为 IP 地址来验证。
		FILTER_VALIDATE_MAC 返回“1”，“true”、“对”、“是的”。否则返回false。
		FILTER_VALIDATE_REGEXP 过滤器根据兼容 Perl 的正则表达式来验证值
		FILTER_VALIDATE_URL
	*/ ?>
