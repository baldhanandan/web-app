<?php
$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");

if(isset($_POST['covid'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['adress'];
    $contact=$_POST['contact'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $travel=$_POST['exampleRadios'];
    $sym=$_POST['sym'];
    echo $fname."<br>";
    echo $lname."<br>";
    echo $address."<br>";
    echo $contact."<br>";
    echo $age."<br>";
    echo $gender."<br>";
    echo $email."<br>";
    echo $city."<br>";
    echo $state."<br>";
    echo $pincode."<br>";
    echo $travel."<br>";
    echo $sym."<br>";
    $query="insert into covid(fname,lname,adress,age,gender,email,contact,city,state,pincode,travelled_outside,symptoms)values('$fname','$lname','$address','$age','$gender','$email','$contact','$city','$state','$pincode','$travel','$sym')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('form registered. ')</script>";
		echo "<script>window.open('iwp_pro.html','_self')</script>";

    }
    else{
        echo "failed";
    }

}
?>
