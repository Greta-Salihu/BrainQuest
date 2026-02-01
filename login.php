<?php
include 'header.php';
include 'config/Database.php';
include 'classes/User.php';

$db=new Database();
$conn=$db->connect();
$user=new User($conn);

if(isset($_POST['login'])){
    if($user->login($_POST['username'],$_POST['password'])){
        header("Location: dashboard.php");
    }else echo "Login failed";
}
?>

<form method="post">
    <input name="username" required>
    <input name="password" type="password" required>
    <button name="login">Login</button>
</form>

<?php include 'footer.php'; 
?>
