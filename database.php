<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="log";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// // Create database
// $sql = "CREATE DATABASE Log";
// if (mysqli_query($conn, $sql)) {
//   echo "<br>Database created successfully";
// } else {
//   echo "<br>Error creating database: " . mysqli_error($conn);
// }




// sql to create table
// $sql = "CREATE TABLE users1 (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50)
//     )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table users created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }

// mysqli_close($conn);


// ?>
