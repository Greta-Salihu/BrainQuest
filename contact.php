<?php
include 'header.php';
include 'config/Database.php';

$db=new Database();
$conn=$db->connect();

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    if(empty($name)||empty($email)||empty($msg)){
        echo "All fields required";
    }else{
        $conn->query("INSERT INTO contacts(name,email,message) VALUES('$name','$email','$msg')");
        echo "Message sent!";
    }
}
?>
<form method="post">
    <input name="name" required>
    <input name="email" type="email" required>
    <textarea name="message" required></textarea>
    <button name="send">Send</button>
</form>

<?php include 'footer.php'; 
?>
