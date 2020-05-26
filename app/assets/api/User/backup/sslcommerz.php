<?php
include_once('connect.php');
header( "refresh:1;url=/payment/booked.php" );


try{
    // Create prepared statement
    $sql = "INSERT INTO sslcommerz (id,email,first_name,name_on_card,card_number,day,year,cvv_number) 
    VALUES (:id,:email,:first_name,:name_on_card,:card_number,:day,:year,:cvv_number)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':id', $_REQUEST['id']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':name_on_card', $_REQUEST['name_on_card']);
    $stmt->bindParam(':card_number', $_REQUEST['card_number']);
    $stmt->bindParam(':day', $_REQUEST['day']);
    $stmt->bindParam(':year', $_REQUEST['year']);
    $stmt->bindParam(':cvv_number', $_REQUEST['cvv_number']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>