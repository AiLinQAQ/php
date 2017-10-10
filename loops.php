<?php
  # loops:循环-让项目制作的更高效

  #根据某个条件，重复执行某段代码
  /*
  - for
  - While
  - Do...While
  - Foreach
  */
  // For 循环 参数(变量，条件,自增)
  // for ($i=0; $i <10 ; $i++) {
  //   echo ($i+1)."<br>";
  // }
  // //while循环
  // $a=0;
  // while ($a < 10) {
  //   echo $a."<br>";
  //   $a++;
  // }
  // #do...while
  // $a=0;
  // do{
  //   echo $a."<br>";
  //   $a=0;
  // }while ($a < 10) {
    # code...
  // };
  // Foreach 循环 下标数组
  $people = array("henry","Bucky","Emily");
  foreach ($people as $person ) {
    echo $person;
    # code...
  }
    // Foreach 循环 关联数组
  $people = array("henry"=>"henry@gmaol.com","Bucky"=>"Bucky@gmaol.com","Emily"=>"Emily@gmaol.com");
  foreach ($people as $person => $emall) {
    echo "name:".$person."mall".$emall ."<br>";
    # code...
  }
  //打印1~100之间7的倍数
  //打印1~100之间个位数为7的数
  //打印1~100之间十位数为7的数
  //打印1~100之间个位不为7十位不为7以及不为7的倍数
  //九九乘法表
 ?>
