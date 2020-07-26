<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" href="css/style.css">
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


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" style="border:1px solid #ccc; margin-left: 400px; margin-right: 400px;">
  <div class="container">
    <h1 style="text-align: center;">Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="username" required>
	
    <label for="email" ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="mobile" ><b>Mobile No.</b></label>
    <input type="text" placeholder="Enter Mobile no." name="mobile" required>
	
	<label for="psw" ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat" ><b>Conform Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cfmpassword" required>
    
    

    <div class="clearfix">
      <button type="button" class="cancelbtn" name="cancel">Cancel</button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
	<div>
		<p>Have an account? <a href="login.php">Login</a><p>
	</div>
  </div>
</form>
</body>
</html>
