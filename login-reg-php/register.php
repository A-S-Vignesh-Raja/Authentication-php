<?php
include('connection.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=mysqli_real_escape_string($con,$username);
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$hashed_password=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users(username,email,password)VALUES('$username','$email','$hashed_password')";
if(mysqli_query($con, $sql)){
    echo "<h4>Registration successful</h4>";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
   
    <br><a href="signin.html"><h5>To sign in click here</h5></a>
</body>
</html>