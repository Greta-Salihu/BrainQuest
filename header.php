<style>
@font-face {
    font-family: "Poppins";
    src: url("Poppins/Poppins-Regular.ttf") format("truetype");
}

body {
    margin: 0;
    font-family: "Poppins", sans-serif;
}

.headeri {
    background-color: #4f46e5;
    padding: 15px 30px;
}

.headeri ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.headeri ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.headeri ul li a:hover {
    text-decoration: underline;
}
</style>

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
            <li><a href="dashboard/BrainQuest.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</header>
