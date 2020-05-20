<?php
include_once('connect.php');
header( "refresh:1;url=/payment/incorporation_show.php" );


try{
    // Create prepared statement
    $sql = "INSERT INTO incorporation (id,name,email,incorporation,business_type) 
    VALUES (:id,:name,:email,:incorporation,:business_type)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':id', $_REQUEST['id']);
    $stmt->bindParam(':name', $_REQUEST['name']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':incorporation', $_REQUEST['incorporation']);
    $stmt->bindParam(':business_type', $_REQUEST['business_type']);
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>