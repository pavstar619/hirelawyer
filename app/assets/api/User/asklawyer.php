<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=PHPLearning", "root", "");
    /* $pdo = new PDO("mysql:host=server276.web-hosting.com;dbname=hireirhb_phplearning", "hireirhb_pavstar619", "hirelawyer619"); */
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO asklawyer (question, email) VALUES (:question, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':question', $_REQUEST['question']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "<p style='color:black; font-size:25px;'>" . 'Records inserted successfully. You will receive any email with you answers!' . "</p>";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>