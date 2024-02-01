<?php
include('connection.php');
$sql="SELECT u.username, u.email, ud.address, ud.role, ud.salary, ud.phone 
        FROM users u INNER JOIN user_details ud ON u.user_id = ud.u_id";
$result=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>User Details</h1>
    <?php
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result); 
        if ($row){
            echo "<div class='user-details'>";
            echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
            echo "<p><strong>E-Mail:</strong> " . $row['email'] . "</p>";
            echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
            echo "<p><strong>Role:</strong> " . $row['role'] . "</p>";
            echo "<p><strong>Salary:</strong> " . $row['salary'] . "</p>";
            echo "<p><strong>Phone:</strong> " . $row['phone'] . "</p>";
            echo "</div>";
        } 
        else{
            echo "<p>No more user details found</p>";
        }
    } 
    else{
        echo "<p>No user details found</p>";
    }
?>
</body>
</html>
