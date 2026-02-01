<?php

include 'header.php';
include 'config/Database.php';
include 'classes/News.php';

$db=new Database();
$conn=$db->connect();
$news=new News($conn);

if(isset($_POST['add'])){
    $image=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);
    $news->add($_POST['title'],$_POST['content'],$image,$_SESSION['user']);
    echo "Added!";
}

?>

<form method="post" enctype="multipart/form-data">
    <input name="title" required>
    <textarea name="content" required></textarea>
    <input type="file" name="image" required>
    <button name="add">Add</button>
</form>

<?php include 'footer.php'; ?>
