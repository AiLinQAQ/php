<?php
  session_start();

  $name = $_SESSION['name'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page 2</title>
  </head>
  <body>
    <h2>你的名字是:<?php echo $name; ?></h2>
  </body>
</html>
