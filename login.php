<?php
include("conn.php");

if (isset($_POST['save'])) {
  
    $email =  $_POST['email'];
    $pass =  $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    
    

    if (mysqli_query($con, $sql)) {
       if($sql->type == 'user'){
        header("Location:home.php");
       }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>SignUp</h2>
    <form action="login.php" method="post">
       
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="pass" placeholder="Enter Password" required><br>
        <input type="submit" name="save" value="Sign Up"><br>
    </form>
</body>
</html>
