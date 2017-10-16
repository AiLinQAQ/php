<?php
  success_start();
  $_SESSION['name']="Hemiah";
  $name = $_SESSION['name'];
  $email = $_SESSION['email']
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>你的名字是:<?php echo $name; ?></h2>
  </body>
</html>
