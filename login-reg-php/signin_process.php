<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=stripcslashes($username);
    $username=mysqli_real_escape_string($con,$username);
    $sql="SELECT password FROM users WHERE username='$username'";
    $result=mysqli_query($con, $sql);
    if ($result){
        $row=mysqli_fetch_assoc($result);
        $stored_hashed_password=$row['password'];
        if (password_verify($password, $stored_hashed_password)){
            echo "<h4>Login successful</h4>";
        } 
        else{
            echo "Login failed. Invalid username or password.";
        }
    } 
    else{
        echo "Login failed. Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">   
</head>
<body>
    <h4><a href="additional_details.html">Fill your details here</a></h4>
    <h4><a href="display_details.php">display detail</a></h4>
</body>
</html>


