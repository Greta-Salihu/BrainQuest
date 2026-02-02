<?php
include 'header.php';
include 'config/Database.php';
include 'classes/news.php';

$db=new Database();
$conn=$db->connect();
$news=new News($conn);

$res=$news->getAll();
?>

<link rel="stylesheet" href="news.css">

<div class="news-container">
    <h1>Latest News</h1>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="news-item">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['content']; ?></p>
        </div>
    <?php endwhile; ?>
</div>

<?php include 'footer.php'; ?>