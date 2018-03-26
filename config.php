<?php
$host="localhost";
$user="root";
$pass="123456";
$db_name="online_notice_board";
$myconn=mysqli_connect("$host","$user","$pass","$db_name");
if(mysqli_connect_error())
{
	echo mysqli_connect_error();
}
else
{
    //echo "yes succes";
	
}
?>