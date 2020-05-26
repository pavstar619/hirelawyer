<?php
include_once('connect.php');
header( "refresh:1;url=/payment/index_2.php" );


try{
    // Create prepared statement
    $sql = "INSERT INTO make_appointment (id,name,email,date)
    VALUES (:id, :name, :email, :date)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':id', $_REQUEST['id']);
    $stmt->bindParam(':name', $_REQUEST['name']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':date', $_REQUEST['date']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>