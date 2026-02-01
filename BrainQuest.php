<?php
include 'header.php';
include 'config/Database.php';

$db=new Database();
$conn=$db->connect();
$res=$conn->query("SELECT content FROM pages WHERE page_name='home'");
$row=$res->fetch_assoc();
?>

<div class="slider"><img src="uploads/slide1.jpg"></div>
<h1><?php echo $row['content']; ?></h1>

<?php include 'footer.php'; ?>
