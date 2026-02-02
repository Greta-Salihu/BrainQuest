<?php
class News {
    private $conn;
    public function __construct($db){
        $this->conn=$db;
    }

    public function add($title,$content,$image,$user){
        return $this->conn->query("INSERT INTO news(title,content,image,created_by)
        VALUES('$title','$content','$image','$user')");
    }

    public function getAll(){
        return $this->conn->query("SELECT * FROM news");
    }

    public function delete($id){
        return $this->conn->query("DELETE FROM news WHERE id=$id");
    }
}
?>
