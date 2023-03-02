<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
if(isset($_POST['dlogin_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from doctorlogin where username='$username' and password='$password';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:patient_details.php");
}
else
	header("Location:doctor_login.php");

}
?>