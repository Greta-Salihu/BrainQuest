<?php
include 'header.php';
include 'config/Database.php';
include 'classes/Services.php';

$db=new Database();
$conn=$db->connect();
$product=new Product($conn);

$res=$product->getAll();

while($row=$res->fetch_assoc()){
    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['description']."</p>";
    echo "<img src='uploads/".$row['image']."' width='200'>";
    echo "<p>By: ".$row['created_by']."</p>";
}

include 'footer.php';
?>
