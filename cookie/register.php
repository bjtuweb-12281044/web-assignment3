<? php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

mysql_connect("localhost","username","password") 
����or die("�޷��������ݿ⣬������"); 
����mysql_select_db("userinfo") 
����or die("�޷�ѡ�����ݿ⣬������"); 
����$query="select id from usertbl where name=$name\"; 
����/*�����ݿ���������ͬ���ֵ��û�����*/ 
����$result=mysql_query($query); 
����$numrows=mysql_num_rows($result); 
����if($numrows!=0) /*������ע������ͬ������*/ 
����{
    echo ������ע�������������ѡ������!;
	}
����else 
����{
    $query="insert into usertbl values(0,$name,$password,\)"; 
����/*�Ҳ�����ͬ�ľ������µ��û�����*/ 
����mysql_query($query); 
����echo ע��ɹ�; 
����echo ���¼!;
    }
?>