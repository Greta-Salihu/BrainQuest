<?php
include 'header.php';
include 'config/Database.php';
include 'classes/Services.php';

$db=new Database();
$conn=$db->connect();
$service = new Services($conn);

$res = $service->getAll();
?>

<link rel="stylesheet" href="services.css">

<div class="services-container">
    <h1>Our Services</h1>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="service-card">
            <h2><?php echo $row['name']; ?></h2>
            <p><?php echo $row['description']; ?></p>
        </div>
    <?php endwhile; ?>
</div>


<?php include 'footer.php'; ?>
