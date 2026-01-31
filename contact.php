<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BrainQuest | Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

<header class="header">
    <h1>Contact Us</h1>
    <p>Get in touch with BrainQuest Study Planner</p>
</header>

<section class="contact-container">

    <div class="contact-info">
        <h2>Our Information</h2>
        <p><strong>Email:</strong> brainquest@gmail.com</p>
        <p><strong>Phone:</strong> +383 44 123 456</p>
        <p><strong>Address:</strong> Prishtina, Kosovo</p>
    </div>

    <div class="contact-form">
        <h2>Send us a message</h2>

        <form>
            <label>Name:</label><br>
            <input type="text" placeholder="Enter your name"><br><br>

            <label>Email:</label><br>
            <input type="email" placeholder="Enter your email"><br><br>

            <label>Message:</label><br>
            <textarea placeholder="Write your message"></textarea><br><br>

            <button type="submit">Send Message</button>
        </form>
    </div>

</section>


<?php include 'footer.php' ?>

</body>
</html>
