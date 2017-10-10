<?php
//  Array: 数组 - 存储一堆数据的集合

/*下标数组:下标以0开始
  关联数组:以第一个名字开头*/
  // 下标数组
  $people=array("kevin","Hemiah","henry");
  echo $people[1];//echo只能去一个值，不能打印数组
  // echo people[3];//echo 数组越界
  $ids=[23,24,25];
  echo $ids[1];
  $cars=["car1","car2","car3"];
  $cars[3]="car4";
  echo $cars[3];
  echo count($cars);//count打印数组长度
  // 打印数组的方法
  print_r($cars);
  // 万能打印方法
  var_dump($cars);

  // 关联数组
  $people = array("henry" =>35,"Hemiah" =>15, "kevin"=>20);
  echo $people["kevin"];//35
  $ids=[35=>"henry",15=>"Hemiah"];
  $ids[20]="kevin";
  // echo $ids[20];//kevin
  // 观察
  $cars[]="Bence";
  // print_r($cars)//数组
  $cars[]="Jonh";

  $people[]=55;
  print_r($people);


  #多维数组
  $cars = array(
    array("car1",20,10),
    array("car2",25,15),
    array("car3",30,20),
  );
  echo $cars[2][1];
 ?>
