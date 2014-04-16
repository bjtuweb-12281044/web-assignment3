<?php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here

mysql_connect("localhost","username","password") 
　　/*连接数据库*/ 
　　or die("无法连接数据库，请重试"); 
　　mysql_select_db("userinfo") 
　　or die("无法选择数据库，请重试"); 
　　$today=date("Y-m-d H:i:s"); 
　　$query="select id from usertbl 
　　where name=$name and password=$password 
　　/*从数据库中搜索和登录用户相应的资料*/ 
　　"; 
　　$result=mysql_query($query); 
　　$numrows=mysql_num_rows($result); 
　　if($numrows==0){ 
　　/*验证是否能找出相同资料的用户，不能则未注册*/ 
　　echo 非法用户 
　　; 
　　echo 请注册先 
　　; 
　　echo 重试 
　　; 
　　} 
　　else{ 
　　$row=mysql_fetch_array($result); 
　　$id=$row[0]; 
　　$query=" 
　　update usertbl 
　　set lastlogin=$today 
　　where id=$id"; 
　　$result=mysql_query($query); 
　　setcookie("mycookie_name", $username);
    setcookie("count", ++$count);
　　echo 登录成功 
　　; 
　　echo 请进! 
　　; 
　　} 
?>

<html>
<head>
</head>
<body>
Welcome <? echo $_POST["name"] ?>!<br/>
You have visited the site <? echo $count ?> times.
<a href="logout.php">logout</a>
</body>
</html>
