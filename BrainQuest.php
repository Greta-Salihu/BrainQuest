<?php
include 'header.php';
include 'config/Database.php';

$db = new Database();
$conn = $db->connect();
$result = $conn->query("SELECT * FROM pages WHERE name='home'");
$row = $result->fetch_assoc();
?>

<link rel="stylesheet" href="home.css">

<div class="home-container">

    <h1><?php echo $row['title']; ?></h1>
    <p><?php echo $row['content']; ?></p>

    <div class="slider">
        <img src="uploads/slide1.jpg" alt="slide">
    </div>

</div>

<?php include 'footer.php'; ?>
