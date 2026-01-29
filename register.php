<?php
include "config.php";

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $passHashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (email, password)
              VALUES ('$email', '$passHashed')";
    
    mysqli_query($conn, $query);

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <h2>Register</h2>

    <form method="POST" action="register.php">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>
    
</body>
</html>