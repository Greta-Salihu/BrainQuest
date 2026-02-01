<?php
include 'header.php';
include 'config/Database.php';

$db=new Database();
$conn=$db->connect();
$res=$conn->query("SELECT content FROM pages WHERE page_name='about'");
$row=$res->fetch_assoc();
?>

<h1><?php echo $row['content']; ?></h1>

<?php include 'footer.php'; ?>
