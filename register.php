<?php
include 'header.php';
include 'config/Database.php';
include 'classes/User.php';

$db=new Database();
$conn=$db->connect();
$user=new User($conn);

if(isset($_POST['register'])){
    $user->register($_POST['username'],$_POST['email'],$_POST['password']);
    echo "Registered!";
}
?>
<form method="post">
    <input name="username" required>
    <input name="email" type="email" required>
    <input name="password" type="password" required>
    <button name="register">Register</button>
</form>

<?php include 'footer.php'; 
?>
