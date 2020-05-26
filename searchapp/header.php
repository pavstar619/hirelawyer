<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    </head>
    <body> 
        <header>
            <nav class="navbar navbar-light" style="background-color: darkorange; float:left;">
                <!-- <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="navbar-brand" href="/index.php">Home</a></li>    
                    <li class="nav-item active"><a class="navbar-brand" href="/index.php">Logout</a></li>    
                </ul> -->
 <!--                <div class="d-inline p-2 bg-primary text-white">d-inline</div>
<div class="d-inline p-2 bg-dark text-white">d-inline</div> -->
                <a>GG</a>
                <a>WP</a>
            </nav>  
        </header>
    </body>
</html>