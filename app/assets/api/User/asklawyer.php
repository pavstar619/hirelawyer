<?php
header( "refresh:3;url=/hirelawyer/index.html" );

include_once('connect.php');
 
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
    echo "<h1>" . 'Records inserted successfully. You will receive an email with you answers!' . "</h1>";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>
<html>
<head>
    <title>Booking</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body style="background-color:#000000b2; color:white; font-family:lato"></body>
</html>