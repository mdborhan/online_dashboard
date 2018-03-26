<?php
$host="localhost";
$user="root";
$pass="123456";
$sql="CREATE DATABASE online_notice_board";
$myconn=mysqli_connect("$host","$user","$pass");
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "database created ok";
}
else
{
	echo mysqli_connect_error();
}
?>