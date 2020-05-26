<?php
class Database{
 
    // specify your own database credentials
    /* private $host = "localhost";
    private $db_name = "PHPLearning";
    private $username = "root";
    private $password = "";
    public $conn; */
     private $host = "server276.web-hosting.com";
    private $db_name = "hireirhb_phplearning";
    private $username = "hireirhb_pavstar619";
    private $password = "hirelawyer619";
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