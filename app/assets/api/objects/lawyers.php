<?php
class Lawyers{
 
    // database connection and table name
    private $conn;
    private $table_name = "lawyers";
 
    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $specialty;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // login user
    function searchlawyers(){
            // select all query
            $query = "SELECT * FROM " . $this->table_name . "";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            return $stmt;
        }   
    
}