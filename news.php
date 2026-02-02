<?php
session_start();
include 'header.php';
include 'config/Database.php';

$db = new Database();
$conn = $db->connect();

$result = $conn->query("SELECT * FROM news ORDER BY id DESC");
?>

<h2 class="title">Latest News</h2>

<div class="news-box">

<?php
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="news-item">
            <img src="download2.webp" alt="News">
            <h3><?= $row['title']; ?></h3>
            <p class="date"><?= date("F d, Y", strtotime($row['created_at'])); ?></p>
            <p><?= $row['content']; ?></p>
        </div>
        <?php
    }
} else {
    echo "<p>No news available.</p>";
}
?>

</div>

<?php include 'footer.php'; ?>
