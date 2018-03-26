<?php 
extract($_POST);
include("config.php");
if(isset($save))
{
    $email=$_POST['e'];
    $pass=$_POST['p'];
	if($email=="" || $pass=="")
	{
	   echo "<font color='red'>fill all the fileds first</font>";	
	}
	else
	{	

        $sql=mysqli_query($myconn,"select * from user where email='$email' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$email;
header('location:user');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
    <h2>Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter your Email</div>
		<div class="col-sm-5">
		  <input type="email" name="e" class="form-control"/>
        </div>
	</div>
	
	<div class="row">
		<div class="col-sm-4">Enter your Password</div>
		<div class="col-sm-5">
		  <input type="password" name="p" class="form-control"/>
        </div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		
		</div>
	</div>
</form>	