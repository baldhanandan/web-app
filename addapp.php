<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
$s1=$_POST['docname'];
$s2=$_POST['timings'];
$s4=" ";
$s3=$s1.$s4;
$s3=$s3.$s2;
if(isset($_POST['app_submit']))
{
	
	$query="insert into appoinment(appoinment,availability)values('$s3',0)";
	$result=mysqli_query($con,$query);
	
	if($result)
	{
		echo "<script>alert('Appointment Added. ')</script>";
		echo "<script>window.open('addappt.html','_self')</script>";

	}
}



?>