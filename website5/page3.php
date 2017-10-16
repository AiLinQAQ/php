<?php
  $users = array('name' => "heny","email"=>"blblbl@.qwe.com","age"=>"10");
  $users = serialize($users);
  setcookie('users',$users,time()+86400);
  $users = unserialize($_COOKIE['users']);
  print_r($users);
 ?>
