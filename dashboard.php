<?php
include 'header.php';
if($_SESSION['role']!='admin'){
    die("Access denied");
}
include 'config/Database.php';

$db=new Database();
$conn=$db->connect();

$res=$conn->query("SELECT * FROM contacts");

while($r=$res->fetch_assoc()){
    echo "<p>".$r['name']." - ".$r['message']."</p>";
}
?>

<a href="add_product.php">Add Product</a>
<a href="add_news.php">Add News</a>

<?php include 'footer.php'; 
?>
