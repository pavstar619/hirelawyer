<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "<h1 style = 'font-family: Lato;'>" .'Successfully Login! You will be redirected shortly'
    );
    //redirect
    header( "refresh:3;url=/index.php" );
}
else{
    $user_arr=array(
        "<h1 style = 'font-family: Lato;'>" .'Invalid username or password! You will be redirected shortly'
    );
    //redirect
    header( "refresh:3;url=/app/index.html" );
}
// make it json format
print_r(json_encode($user_arr));
?>
<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body style="background-color: #000000b2; color:white;"></body>
</html>