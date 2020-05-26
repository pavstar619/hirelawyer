<?php
header( "refresh:3;url=/index.html" );

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
/*     $pdo = new PDO("mysql:host=localhost;dbname=PHPLearning", "root", "");
 */    $pdo = new PDO("mysql:host=server276.web-hosting.com;dbname=hireirhb_phplearning", "hireirhb_pavstar619", "hirelawyer619");
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