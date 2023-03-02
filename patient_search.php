<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['docapp'];
	$query="select * from doctorapp where docapp='$contact'";
	$result=mysqli_query($con,$query);
	echo "
	<div class='card'>
	<img src='https://www.humanitas.net/content/uploads/2017/10/medical-care.jpg' style='height:350px;' class='card-img-top'>
	<div class='card-body'>
	<table class='table table-hover'>
        <thead>
           <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>";
	while($row=mysqli_fetch_array($result)){
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
	echo "</tbody></table></div></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
