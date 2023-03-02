<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
$name=$_POST['fname'];
$email=$_POST['email'];
$docname=$_POST['dname'];
$disease=$_POST['disease'];
$text=$_POST['text'];
echo $name."<br>";
echo $email."<br>";
echo $docname."<br>";
echo $disease."<br>";
echo $text."<br>";
$query="insert into exp(name,email,drname,disease,exper)values('$name','$email','$docname','$disease','$text')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('form registered. ')</script>";
		echo "<script>window.open('iwp_pro.html','_self')</script>";

    }
    else{
        echo "failed";
    }



?>
