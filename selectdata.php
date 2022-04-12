<?php
include("config.php");
$sql = "SELECT firstname, lastname,email,mobile,username,passw FROM user WHERE username='abc'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "firstname: " . $row["firstname"]. " - LastName: " . $row["lastname"]. " Mobile" . $row["mobile"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
