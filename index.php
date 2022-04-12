<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
    <title>Registration Form</title>
</head>
<body>
    <center><h1 >Registration Form</h1> </center>
    <form name="form"  action="insertdata.php" method="post">

    <table>

    <tr>
        <td>First Name:</td>
        <td><input type="text" name="firstName" placeholder="Enter First Name"/></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lastName" placeholder="Enter Last Name"/></td>
    </tr>
    <tr>
        <td>E-Mail:</td>
        <td><input type="email" name="email" placeholder="xyz@gmail.com"/></td>
    </tr>
    <tr>
        <td>Usernam</td>
        <td><input type="text" name="username" /></td>    <tr>

        <td>Mobile Number:</td>
        <td><input type="number" name="mobile" /></td>
    </tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td class="doto"><input type="submit" value="Register"></td>
    </tr>
    </table>
    </form>
 
</body>
</html>


