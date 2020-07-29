<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location: home.php');
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles4.css" rel="stylesheet">
</head>
<body>



<?php

include 'db_connect.php';

	if(isset($_POST['submit']))
	{
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$cfmpassword = mysqli_real_escape_string($con, $_POST['cfmpassword']);
		
		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cfmpassword, PASSWORD_BCRYPT);
		
		$emailquery = "select * from registration where email='$email' ";
		$query = mysqli_query($con,$emailquery);
		
		$emailcount = mysqli_num_rows($query);
		
		if($emailcount>0)
		{
			echo "email already exist";
		}
		else
		{
			if($password === $cfmpassword)
			{
				$insertquery = "insert into registration(username,email,mobile,password,cpassword) 
				values('$username','$email','$mobile','$pass','$cpass')";
				
				$iquery = mysqli_query($con, $insertquery);
				
				if($iquery)
				{
					?>
						<script>
							alert("Inserted Successful");
						</script>
					<?php
					header('location: login.php');
				}else
				{
					
					?>
						<script>
							alert(" not Inserted");
						</script>
					<?php
				}
			}
			else
			{
				echo "password are not matching";
			}
		}
	}

?>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Full Name" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mobile no." name="mobile" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Conform Password" name="cfmpassword" type="password" value="">
							</div>
							
							<input type="submit" name="submit" class="btn btn-primary" value="Sign Up">
							<div>
								<p>Have an account? <a href="login.php">Login</a><p>
							</div>
							<!--<a type="submit" name="submit" class="btn btn-primary">Login</a>--></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
