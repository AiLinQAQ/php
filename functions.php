<?php
  // function:函数 - 具有某一功能的代码块
  /*
    camel case - myFunction()
    lower Case - my_function()
    Pascal Case - MyFunction
  */

  //定义函数
  /*function simpleFunction(){
    echo "hello world";
  }*/
  //调用函数
  // simpleFunction();
  //有参数无返回值
  // function buy($money=20)//给一个默认值
  // {
  //   echo $money."块钱给了,但没买东西!拿着钱跑了;还我血汗钱~还我血汗钱~"."<br />";
  // };
  // buy();
  // buy(10);
  // 多参 有返回值
  // function sumValue($num1,$num2)
  // {
  //   $sum=$num1 + $num2;
  //   return $sum;
  // }
  // $result = sumValue(5,6);
  // echo $result;

  // 无参数有返回值
  // function buyDrink($value='')
  // {
  //   return "饭后的饮料!";
  // }
  // echo buyDrink();
  // 函数传引用
  $myNum=10;
  function addFive(&$sum)//&为取地址符可以取出内存中的数值，并可以改变。
  {
    return $sum+5;
  }
  addFive($myNum)
 ?>
