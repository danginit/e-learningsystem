<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
</head>
<body>

<?php

include 'db_connect.php';

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$email_search = "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);
	$email_count = mysqli_num_rows($query);
	
	if($email_count)
	{ 
		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass['password'];
		
		$_SESSION['username'] = $email_pass['username'];
		$pass_decode = password_verify($password, $db_pass);
		
		if($pass_decode)
		{
			echo "Login Successful";
			?>
			<script>
				location.replace("home1.php");
			</script>
			<?php 
		}
		else
		{
			echo "Password Incorrect";
		}
	}
	else
	{
		echo "Invalid Email";
	}
}

?>


<div class="container" style="margin-left: 250px; margin-right: 250px; margin-top: 100px;">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" style="margin-left: 50px; margin-right: 50px;">
    <div class="row">
      <h2 style="text-align:center">Sign In</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit"  value="Login">
      </div>
      
    </div>
  </form>
</div>

<!--- <div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white " class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>  --->

</body>
</html>
