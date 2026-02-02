<?php
class User {
    private $conn;
    public function __construct($db){
        $this->conn=$db;
    }

    public function register($u,$e,$p){
        $p=password_hash($p,PASSWORD_DEFAULT);
        return $this->conn->query("INSERT INTO users(username,email,password,role) VALUES('$u','$e','$p','user')");
    }

    public function login($u,$p){
        $res=$this->conn->query("SELECT * FROM users WHERE username='$u'");
        $user=$res->fetch_assoc();
        if($user && password_verify($p,$user['password'])){
            $_SESSION['user']=$user['username'];
            $_SESSION['role']=$user['role'];
            return true;
        }
        return false;
    }
}
?>
