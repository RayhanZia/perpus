<?php
include_once("Database.php");

class Admin extends Database{
    public function all(){
        $sql = "SELECT * from user";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id){
        $sql = "SELECT * from user where id='$id'";

        return $this->db->query($sql)->fetch_assoc();
    }

    public function getAnggota(){
        $sql = "SELECT * from user where role='user'";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function getAdmin(){
        $sql = "SELECT * from user where role='admin'";

        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }


 
}