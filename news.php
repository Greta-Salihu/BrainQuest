<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BrainQuest | News</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>

<?php
session_start();
include 'header.php';
include 'config/Database.php';
include 'classes/News.php';
?>

<h2 class="title">Latest News</h2>

<div class="news-box">

    <div class="news-item">
        <img src="download2.webp" alt="News 1">
        <h3>New Study Planner Released</h3>
        <p class="date">January 20, 2026</p>
        <p>
            BrainQuest has launched a new study planner feature to help students organize their daily tasks and improve productivity.
        </p>
    </div>

    <div class="news-item">
        <img src="download4.webp" alt="News 2">
        <h3>Exam Tips for Students</h3>
        <p class="date">January 15, 2026</p>
        <p>
            Here are some simple and effective study tips to help students prepare better for exams using BrainQuest.
        </p>
    </div>

    <div class="news-item">
        <img src="download1.webp" alt="News 3">
        <h3>BrainQuest Mobile App Coming Soon</h3>
        <p class="date">January 10, 2026</p>
        <p>
            We are working on a mobile version of BrainQuest to support students on Android and iOS devices.
        </p>
    </div>

</div>

<?php include 'footer.php' ?>

</body>
</html>
