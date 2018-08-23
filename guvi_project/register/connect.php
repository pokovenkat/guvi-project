<?php

$con= mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to Server';
}
$sel=mysqli_select_db($con,'guvi_db');
if(!$sel)
{
	echo 'database not selected';
}

$email=$_POST['form-Email_id'];
$fname=$_POST['form-First_Name'];
$lname=$_POST['form-Last_Name'];
$pswd=$_POST['form-Password'];
$cpswd=$_POST['form-Confirm_Password'];
$age=$_POST['form-Age'];
$gender=$_POST['form-Gender'];
$degree=$_POST['form-Degree'];
$phone=$_POST['form-Phone_No'];
$city=$_POST['form-City_Name'];
$plot=$_POST['form-Plot_Number'];
$street=$_POST['form-Street_Name'];
$district=$_POST['form-District'];
$pincode=$_POST['form-Pin_Code'];

if($pswd==$cpswd)
{
	$sql= "INSERT INTO `details` (`id`, `email`, `firstname`, `lastname`, `password`, `age`, `gender`, `degree`, `phone`, `plotno`, `street`, `city`, `district`, `pincode`) VALUES (NULL, '$email', '$fname', '$lname', '$pswd', '$age', '$gender', '$degree', '$phone', '$plot', '$street', '$city', '$district', '$pincode')";
	if(!mysqli_query($con,$sql))
	{
		echo "Please check all your data";
	}
	else
	{
		 echo "<script>alert('You registered successfully !!!!\n Check your mail for confirmation');</script>";
		$msg = "Thank you! for registered in our site.\n Let us make different and innovative. \n  your login is activated.\n Click on this link to log on .... https://localhost/guvi_project/login/check.php\n ";
		$msg = wordwrap($msg,200);
		mail($email,"RE: Your confirmation of registration in our site !!!",$msg);
		}
}
else
{
	 echo "<script>alert('Mismatch in confirm password !^_^ ... ');</script>";
     redirect('ind.html');
}

	
?>