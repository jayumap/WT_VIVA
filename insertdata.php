<?php
include("config.php");
$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];

$sql = "INSERT INTO user (firstname,lastname,email,mobile,username,passw)
VALUES ('$firstname', '$lastname', '$email','$mobile','$username','$password')";

if (mysqli_query($conn, $sql)) {

header("Location:login.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
