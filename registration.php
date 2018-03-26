<?php 
require("config.php");
extract($_POST);
if(isset($save))
{
    $e=$_POST['e'];
    $name=$_POST['n'];
    $pass=$_POST['p'];
    $mob=$_POST['mob'];
    $gen=$_POST['gen'];
    $hob1=$_POST['hob[]'];
    $hob=implode(",",$hob1);
    $filetmp = $_FILES["img"]["tmp_name"];
    $filename = $_FILES["img"]["name"];
    $filetype = $_FILES["img"]["type"];
    $filepath = "images/".$filename;
    move_uploaded_file($filetmp,$filepath);
    $yy=$_POST['yy'];
    $mm=$_POST['mm'];
    $dd=$_POST['dd'];
    $dob=$yy."-".$mm."-".$dd;
//check user alereay exists or not
$sql=mysqli_query($myconn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
    echo "<font color='red'>This user already exists</font>";
//$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
//$dob=$yy."-".$mm."-".$dd;

//hobbies
//$hob=implode(",",$hob);

//image
//$imageName=$_FILES['img']['name'];


//encrypt your password
//$pass=md5($p);

$query="INSERT INTO `user`(`id`, `name`, `email`, `pass`, `mobile`, `gender`, `hobbies`, `image`, `dob`) VALUES ('','$n','$e','$pass','$mob','$gen','$hob','$filepath','$dob')";
//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$filepath','$dob',now())";
mysqli_query($myconn,$query);


echo "<font color='blue'>Registration successfull !!</font>";
//$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<html>
    <head>
    
    </head>
    <body>
        <h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	           <tr>
		          <td colspan="2"><?php echo @$err;?></td>
	           </tr>
				
				<tr>
					<td>Enter Your name</td>
					<td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<td><input type="number" class="form-control"  name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<td>
				        Male<input type="radio" name="gen" value="m" required/>
				        Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your hobbies</td>
					<td>
					   Reading<input value="reading" type="checkbox" name="hob[]"/>
					   Singing<input value="singin" type="checkbox" name="hob[]"/>
						Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<td><input type="file" class="form-control"  name="img" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<td>
					   <select name="yy" required>
					   <option value="">Year</option>
					   <?php 
					   for($i=1950;$i<=2016;$i++)
					   {
					       echo "<option>".$i."</option>";
					   }					
					?>
					
					</select>
					
					<select name="mm" required>
					   <option value="">Month</option>
					       <?php 
					   for($i=1;$i<=12;$i++)
					{
                           echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					   echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
                    <td colspan="2" align="center">
                        <input type="submit" class="btn btn-success" value="Save" name="save"/>
                        <input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
    
    </body>

</html>