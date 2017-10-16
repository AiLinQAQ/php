<?php
#监听用户是否触发了submit
if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  setcookie('username',$username,time() + 86400*30);
  header("location: page2.php");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="username" value="" placeholder="enter ur name">
        <!-- <br/> -->
        <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
