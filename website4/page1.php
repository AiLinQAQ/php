<?php
  if (isset($_POST['submit'])) {
    # code...
    // echo "123";
    session_start();//开始获取
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    header("location:page2.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="name" value=""placeholder="enter name">
      <input type="text" name="email" value="" placeholder="enter email">
      <input type="submit"  value="提交" name="submit">
    </form>
  </body>
</html>
