<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_elearning";

if (isset($_POST['btnRegister'])) {



$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $name =  $_REQUEST['name'];
	$phone_number =  $_REQUEST['phone_number'];
	$email =  $_REQUEST['email'];
	$refer_id = '998877';
    

$sql = "INSERT INTO affiliate_id ( name, phone_number, email , refer_id )
VALUES ( '$name', '$phone_number', '$email' , $refer_id )";

if (mysqli_query($conn, $sql)) {
 // $last_id = mysqli_insert_id($conn);
  echo "Affiliate ID created successfully. <br> Your affiliate ID is: " . $refer_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  
    

}



?> 