<?php
include 'header.php';
include 'config/Database.php';

$db = new Database();
$conn = $db->connect();
$result = $conn->query("SELECT * FROM pages WHERE name='about'");
$row = $result->fetch_assoc();
if (!$row) {
    $row = ['title' => 'About Us', 'content' => ''];
}
?>

<link rel="stylesheet" href="aboutus.css">

<div class="about-container">

    <h1><?php echo $row['title']; ?></h1>
    <p><?php echo $row['content']; ?></p>

</div>

<?php include 'footer.php'; ?>
