<?php
include("config.php");
// Table structure for table `user`

$user_table="CREATE TABLE IF NOT EXISTS user (
  id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  name char(40) NOT NULL,
  email varchar(40) NOT NULL,
  pass varchar(40) NOT NULL,
  mobile varchar(11) NOT NULL,
  gender varchar(40) NOT NULL,
  hobbies varchar(40) NOT NULL,
  image varchar(50) NOT NULL,
  dob datetime NOT NULL,
  UNIQUE KEY email (email))" ;

$notice="CREATE TABLE IF NOT EXISTS notice (
  notice_id int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (notice_id),
  user varchar(50) NOT NULL,
  subject varchar(100) NOT NULL,
  Description text NOT NULL,
  Date datetime NOT NULL)";

$admin="CREATE TABLE IF NOT EXISTS admin (
  admin_id int(11) NOT NULL AUTO_INCREMENT,
  user varchar(50) NOT NULL,
  pass varchar(50) NOT NULL,
  PRIMARY KEY (admin_id)
) ";

$sql="INSERT INTO admin (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin')";
$query3=mysqli_query($myconn,$admin);
$query4=mysqli_query($myconn,$sql);
$query2=mysqli_query($myconn,$notice);
if ($query2 === TRUE)
{
	echo "<h3>notice table created OK  </h3>"; 
} 
else 
{
	echo "<h3>notice table NOT created  </h3>"; 
}

$query = mysqli_query($myconn, $user_table);
if ($query === TRUE)
{
	echo "<h3>user table created OK  </h3>"; 
} 
else 
{
	echo "<h3>user table NOT created  </h3>"; 
}

?>