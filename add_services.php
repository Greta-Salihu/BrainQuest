<?php
include 'header.php';
include 'config/Database.php';
include 'classes/Product.php';

$db=new Database();
$conn=$db->connect();
$product=new Product($conn);

if(isset($_POST['add'])){
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);
    $product->add($_POST['title'],$_POST['desc'],$image,$_SESSION['user']);
    echo "Added!";
}
?>

<form method="post" enctype="multipart/form-data">
    <input name="title" required>
    <textarea name="desc" required></textarea>
    <input type="file" name="image" required>
    <button name="add">Add</button>
</form>
<?php include 'footer.php'; ?>
