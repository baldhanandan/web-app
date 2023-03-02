<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
$username=$_POST['username'];
$password=$_POST['password'];
echo $username;
echo $password;
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
echo $username;
echo $password;
$query="select * from admin where username='$username' and password='$password';";
$result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
	header("Location:addappt.html");
    }
    else
	    header("Location:adminlogin.html");
	

}
?>