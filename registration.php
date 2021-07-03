<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div>
<?php 
if(isset($_POST['create'])){

	$firstname 	= $_POST['firstname'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	$password 	= $_POST['password'];

	echo $firstname. " ". $lastname. " ". $email. " ". $phonenumber. " ". $password;
	
}

//end of php
 ?>

</div>





<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">

			<h1>Registration</h1>
			<p>Fill up the form with the correct values.</p>
			<hr class="mb-3">

			<label for="firstname">First Name</label>
			<input class="form-control"  type="text" name="firstname" required>

			<label for="lastname">Last Name</label>
			<input class="form-control" type="text" name="lastname" required>

			<label for="email">Email</label>
			<input class="form-control"  type="email" name="email" required>

			<label for="phonenumber">Phone Number</label>
			<input class="form-control" type="text" name="phonenumber" required>

			<label for="password">Password</label>
			<input class="form-control"  type="password" name="password" required>
			<hr class="mb-3">

			<input class="btn btn-primary" type="submit" name="create" value="Sign Up">

			</div>
		</div>
	</form>
</div>

</body>
</html>