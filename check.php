<?php 
/**
* 登录验证
*/

$dbhost = "localhost";
$charset = 'utf8';
$dbname = "b8_29277991_123";	//数据库名称
$dbuser = "b8_29277991";		//数据库用户名
$dbpass = "123456";	//数据库密码
$tbname = 'userforP'; 	//表格名
$name=$_POST['name'];  
$password=$_POST['password'];  

try
{
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
	$sql = "SELECT * FROM userforP where Uname='$name'and Upassword='$password'";
	
	if ( $query = $conn->query($sql) ) 
	{
		if($query->rowCount()<1)	//如果数据库中找不到对应数据
		{
			echo"<script type='text/javascript'>alert('账号或密码错误'); location='sign.php';</script>";  
		}
		else
		controller:

public function getResource(){
    return view('home.test');

}
		{	
	//增加密码错误后错误次数和锁定功能
	//登录成功后错误次数归零，跳转到对应页面
			echo"<script type='text/javascript'>alert('登陆成功');windows.location.herf="'.$data.'";</script>";  
		}
	}
	else
	{
		echo "Query failed\n";
	}
	$conn = null; // 关闭连接
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>