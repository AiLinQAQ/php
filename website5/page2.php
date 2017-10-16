<?php
// var_dump ($_COOKIE['username']);
setcookie('username','Franch',time()+86400);
// var_dump ($_COOKIE['username']);
// setcookie('username','11',time()-86400);

if (isset($_COOKIE['username'])) {
  echo "你的用户名是:".$_COOKIE['username'];
}else {
  echo "你的用户名不存在请注册！";
}


 ?>
