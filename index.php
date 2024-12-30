<?php
include("conn.php");

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $pass =   $_POST['password'];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($con, $sql)) {
        header("Location: login.php");
        exit; // Ensure no further code is executed after redirection
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
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Name" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="pass" placeholder="Enter Password" required><br>
        <input type="submit" name="save" value="Sign Up"><br>
    </form>
</body>
</html>
