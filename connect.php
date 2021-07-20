<?php
 $server="db4free.net:3306";//主机
 $db_username="huyihe";//数据库用户名
 $db_password="Hyh386855867";//数据库密码
 $con = mysql_connect($server,$db_username,$db_password);//链接数据库
 if(!$con){
    die("数据库连接失败：".mysql_error());
 }
 mysql_select_db('dsc',$con);//选择数据库
?>