
<?php

// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    $user_arr=array(
       "<h1 style = 'font-family: Lato;'>" .'Sign up successful. Your account has been created! You will be redirected shortly'
    );
    header( "refresh:3;url=/index.html" );
}
else{
    $user_arr=array(
        "<h1 style = 'font-family: Lato;'>" .'Username already exists! You will be redirected shortly'
    );
    header( "refresh:3;url=/app/index.html" );
}
print_r(json_encode($user_arr));
?>

<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body style="background-color: #000000b2; color:white;"></body>
</html>
