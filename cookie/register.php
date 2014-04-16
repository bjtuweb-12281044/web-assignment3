<? php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

mysql_connect("localhost","username","password") 
　　or die("无法连接数据库，请重试"); 
　　mysql_select_db("userinfo") 
　　or die("无法选择数据库，请重试"); 
　　$query="select id from usertbl where name=$name\"; 
　　/*从数据库中搜索相同名字的用户资料*/ 
　　$result=mysql_query($query); 
　　$numrows=mysql_num_rows($result); 
　　if($numrows!=0) /*有人先注册了相同的名字*/ 
　　{
    echo 已有人注册此名，请重新选择名字!;
	}
　　else 
　　{
    $query="insert into usertbl values(0,$name,$password,\)"; 
　　/*找不到相同的就输入新的用户资料*/ 
　　mysql_query($query); 
　　echo 注册成功; 
　　echo 请登录!;
    }
?>