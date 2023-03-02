<!DOCTYPE html>
<?php include("func.php");
$query1="select * from appoinment";
$result1=mysqli_query($con,$query1);
?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background:url('pic5.jpg') no-repeat;background-size:cover;height:300px;"></div>
	<div class="container">
	<div class="card">
	      		<div class="card-body" style="background-color:#3498D8;color:#ffffff;">
            <div class="row">
            <div class="col-md-1">
              <a href="iwp_pro.html" class="btn btn-light">Log out</a></div>
	      			<div class="col-md-3"><h3>Patient Details</h3></div>
              <div class="col-md-8">
                <form class="form-group" action="patient_search.php" method="post">
                <div class="row">
                  <div class="col-md-10">
                  <select class="form-control" name="docapp">
	      					
                  <option selected="selected">Select Doctor </option>
                  <?php
                  while($row=mysqli_fetch_array($result1)){
                    ?>
                      <option value="<?php echo htmlentities($row['appoinment']); ?>"><?php echo htmlentities($row['appoinment']); ?></option>
                    <?php
                  }
                  ?>
                  </select>
                  </div>
                  <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div></div>
                </form>
              </div>
	      		</div></div>
	      		<div class="card-body">
	      		<table class="table table-hover">
  <thead>
    <tr>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Email Id</th>
      <th >Contact</th>
      <th >Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details();?>
  </tbody>
</table>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>	