<?php
class Services {
    private $conn;
    public function __construct($db){
        $this->conn=$db;
    }

    public function add($title,$desc,$image,$user){
        return $this->conn->query("INSERT INTO services(title,description,image,created_by)
        VALUES('$title','$desc','$image','$user')");
    }

    public function getAll(){
        return $this->conn->query("SELECT * FROM services");
    }

    public function delete($id){
        return $this->conn->query("DELETE FROM services WHERE id=$id");
    }
}
?>
