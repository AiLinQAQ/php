<?php
  // if & switch

  //关系运算符
  /* > < = == === != !==*/
  $num=2;
  // if ($num<=4) {
  //   echo "mum的值一定小于四";
  // }else {
  //   # code...
  // }
  if ($num>=4) {
    if ($num) {
      echo "mum的值一定大于四小于十";
    }else {
      echo "mum的值一定大于十";
    }

  }else {
      echo "mum的值一定大于四小于四";
  }

  // 逻辑运算符
  /* 逻辑与 && AND   一假则假
     逻辑或 || OR    一真则真
     逻辑非 !
     逻辑异或 XOR    只有一个为真，结果才为真。
     */

     if ($num>3 XOR $num<10) {
       # code...
     }

     //switch
    //  $favColor="green"

     switch ($favColor) {
       case 'red':
       echo "angrng";
         break;
         case 'blue':
         echo "";
         break;
         case 'red':
         # code...
         break;

       default:
         # code...
         break;
     }
 ?>
