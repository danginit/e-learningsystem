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
