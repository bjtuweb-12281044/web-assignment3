<html>
<head>
</head>
<body>
  <?php setcookie("mycookie_name");
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
    <input type="submit"/>
  </form>
  <form action="register.php" method="post">
  <a href="D:\wamp\www\cookie\register.php">register</a>
  </form>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>
