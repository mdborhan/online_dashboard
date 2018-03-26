<?php 
include('../config.php');
$nid=$_GET['id'];

$q=mysqli_query($myconn,"delete from notice where notice_id='$nid'");

header('location:index.php?page=notification');

?>