<?php
include_once('connect.php');
header( "refresh:1;url=/payment/makerealdocuments_upload.php" );


try{
    // Create prepared statement
    $sql = "INSERT INTO make_documents (id,first,last,email,documents) 
    VALUES (:id,:first,:last,:email,:documents)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':id', $_REQUEST['id']);
    $stmt->bindParam(':first', $_REQUEST['first']);
    $stmt->bindParam(':last', $_REQUEST['last']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':documents', $_REQUEST['documents']);
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>