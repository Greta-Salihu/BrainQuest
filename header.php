<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainQuest</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="headeri">
        <ul>
            <li><a href="BrainQuest.php">Home</a></li>
            <li><a href="aboutus.php">AboutUs</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php if(!isset($_SESSION['user'])): ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php else: ?>
                <li><a href="dashboard/BrainQuest.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </header>
    
