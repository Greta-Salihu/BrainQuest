<?php
include 'header.php';
include 'config/Database.php';

$db = new Database();
$conn = $db->connect();
$result = $conn->query("SELECT * FROM pages WHERE name='home'");

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    $row = [
        'title' => 'Page not found',
        'content' => ''
    ];
}
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
