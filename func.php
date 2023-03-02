<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from registration where email='$username' and password='$password';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:adminpanel.php");
}
else
	header("Location:hms.php");
	$result21 = mysqli_query($con,"select * from registration where email='$username'") or die("failed to query database ".mysqli_error());
	$row21 = mysqli_fetch_array($result21);
	$cookie_name = "doctor";
	$cookie_value = $row21['firstname'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
	$result=mysqli_query($con,$query);
	$query2="UPDATE appoinment SET availability =1 where appoinment = '$docapp'";
	$result1=mysqli_query($con,$query2);
	if($result and $result1 )
	{
		echo "<script>alert('Appointment registered. ')</script>";
		echo "<script>window.open('adminpanel.php','_self')</script>";

	}
}
function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)) {
		$fname=$row['fname'];
	    $lname=$row['lname'];
	    $email=$row['email'];
	    $contact=$row['contact'];
	    $docapp=$row['docapp'];
	    echo "<tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";
	}
}
?>