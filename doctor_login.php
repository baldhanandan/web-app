<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style type="text/css">
	#ab1:hover{cursor:pointer;}
</style>
<body style="background:url('https://img.freepik.com/free-photo/blur-hospital_1203-7957.jpg?size=626&ext=jpg') no-repeat; background-size:cover;">
	<div class="container" style="width:400px;margin-top:100px;">
	<div class="card">
			<img src="https://thumbs.dreamstime.com/b/medical-background-8377560.jpg" class="card-img-top">
	<div class="card-body">
		<form class="from-group" action="doc_con.php" method="post">
			<center><label>Doctor Login<br></center>
			<label>E-mail :</label><br>
			<input type="text" name="username" class="form-control" placeholder="enter email"><br>
			<label>Password :</label><br>
			<input type="password" name="password" class="form-control" placeholder="enter password"><br>
			<input type="submit" name="dlogin_submit" id="ab1" class="btn btn-primary">
			

		</form>
		
	</div>
</div>
</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
