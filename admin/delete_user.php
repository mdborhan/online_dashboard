<?php 
include("../config.php");
$nid=$_GET['id'];

$q=mysqli_query($myconn,"delete from user where id='$nid'");

header('location:index.php?page=manage_users');

?>