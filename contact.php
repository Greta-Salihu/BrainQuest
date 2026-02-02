<?php
include 'header.php';
include 'config/Database.php';

$db = new Database();
$conn = $db->connect();

$message = "";

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    if (empty($name) || empty($email) || empty($msg)) {
        $message = "All fields are required.";
    } else {
        $stmt = $conn->prepare(
            "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $name, $email, $msg);
        $stmt->execute();

        $message = "Message sent successfully!";
    }
}
?>

<link rel="stylesheet" href="contact.css">

<div class="contact-container">

    <div class="contact-form" style="width:100%;">

        <?php if ($message != ""): ?>
            <p><?= $message ?></p>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="name" placeholder="Name" required>

            <input type="email" name="email" placeholder="Email" required>

            <textarea name="message" placeholder="Message" required></textarea>

            <button type="submit" name="send">Send</button>
        </form>

    </div>

</div>

<?php include 'footer.php'; ?>
