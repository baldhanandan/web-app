<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title></title>
</head>
<body>
	<?php
	$con=mysqli_connect("localhost","root","Nandan@2001","hmsdb");
	$query="select * from appoinment where availability=0";
	$result=mysqli_query($con,$query);

	?>
	<div class="jumbotron" style="background:url('pic5.jpg') no-repeat;background-size:cover;height:300px;"></div>
	<h1>
	<?php
		if(!isset($_COOKIE['doctor'])) {
	   } else {
			echo "Welcome  " . $_COOKIE['doctor']."!!";
	   }
	?>
	</h1>
	<div class="container-fluid">
	<div class="row">
	     <div class="col-md-3">
	         <div class ="list-group">
	          	<a href="" class="list-group-item active" style="background-color:#3498D8;color:#ffffff;border-color:#3498D8">Payment</a>
	          	
	          	<a href="s.php" class="list-group-item">Payment/Checkout</a>
	          </div>
	          <hr>
	        
	     </div>
	    <div class="col-md-8">
	      	<div class="card">
				  <div class="card-body" style="background-color:#3498D8;color:#ffffff;">
				  <a href="iwp_pro.html" class="btn btn-light">Log out</a>
	      			<h3>Book an Appointment</h3>
	      		</div>
	      		<div class="card-body">
	      			<form class="form-group" action="func.php" method="post">
	      				<label>First Name :</label>
	      				<input type="text" name="fname" class="form-control"><br>
	      				<label>Last Name :</label>
	      				<input type="text" name="lname" class="form-control"><br>
	      				<label>Email Id :</label>
	      				<input type="text" name="email" class="form-control"><br>
	      				<label>Contact :</label>
	      				<input type="text" name="contact" class="form-control"><br>
	      				<label>Doctor Appointment :</label>
	      				<select class="form-control" name="docapp">
	      					
							  <option selected="selected">Select Doctor </option>
							  <?php
							  while($row=mysqli_fetch_array($result)){
								  ?>
								    <option value="<?php echo htmlentities($row['appoinment']); ?>"><?php echo htmlentities($row['appoinment']); ?></option>
									<?php
							  }
							  ?>
	      				</select><br>
	      				<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
	      			</form>
	      		</div>
	      	</div>
	     </div>
	     <div class="col-md-1"></div>
	 </div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>