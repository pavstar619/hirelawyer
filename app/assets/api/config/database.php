<?php
class Database{
 
    // specify your own database credentials
    public $host = "server276.web-hosting.com";
    public $db_name = "hireirhb_phplearning";
    public $username = "hireirhb_pavstar619";
    public $password = "hirelawyer619";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>