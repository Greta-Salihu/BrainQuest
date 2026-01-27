<?php
session_start();
session_destroy();
header("Location = BrainQuest.php");
exit();
?>