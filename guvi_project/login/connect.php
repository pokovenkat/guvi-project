
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

	$sqlr="SELECT * FROM details";
	$result=mysqli_query($con,$sqlr) or die("Error in connection");
   while($row=mysqli_fetch_array($result)){
   	
 
                                        echo "HI , ".$row['firstname'] ." !!!";
                                        echo "<br>";
                                    $em= $row['email'];
                                    $fname=$row['firstname'];
                                    $lname=$row['lastname'];
                                    $age=$row['age'];
                                    $gender=$row['gender'];
                                    $degree=$row['degree'];
                                    $phone=$row['phone'];
                                    $plot=$row['plotno'];
                                    $st=$row['street'];
                                    $city=$row['city'];
                                    $dist=$row['district'];
                                    $pin=$row['pincode'];
                                     echo $em;
                                        echo "<br>";
                                        echo $fname; 
                                        echo "<br>";
                                        echo $lname;
                                        echo "<br>";
                                        echo $age;
                                        echo "<br>";
                                        echo $gender; 
                                        echo "<br>";
                                        echo $degree; 
                                        echo "<br
                                        >";                                                                            echo $plot.",".$st." ";
                                        echo "<br>" ;
                                        echo $city;
                                        echo "<br>" ;
                                        echo $dist."-".$pin;
   	
    
   }
                                       
	
	header("refresh:2; url=check.php");

?>

