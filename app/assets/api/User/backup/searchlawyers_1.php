<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
<body>
<style>

    /*HEADINGS*/
    h1,h2,h3{
    font-family:Lato;
    font-weight: 300;
    text-transform: uppercase;    
    text-align: center;
    }

    


    /*TABLES*/
    #customers {
    font-family: "Lato", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size:25px;
    
    }

    #customers td, #customers th {
    border: 2px solid black;
    padding: 8px;
    text-align: center;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: darkorange;
    color: white;
    }
</style>
    <h1>lawyers in bangladesh</h1>

    <?php
    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/lawyers.php';
    
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    $user = new Lawyers($db);
    $stmt = $user->searchlawyers();

        echo '<table id="customers" border="0" cellspacing="2" cellpadding="2"> 
        <tr> 
            <th> <font face="Lato">First Name</font> </th> 
            <th> <font face="Lato">Last Name</font> </th> 
            <th> <font face="Lato">Email ID</font> </th> 
            <th> <font face="Lato">Specialty</font> </th> 
            <th> <font face="Lato">City</font> </th> 
            <th> <font face="Lato">Hire or Not</font> </th> 

        </tr>';

    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $field1name = $row["firstname"];
            $field2name = $row["lastname"];
            $field3name = $row["email"];
            $field4name = $row["specialty"];
            $field5name = $row["city"];

    
            echo '<tr> 
                    <td><a href="/profile/index.php">'.$field1name.'</td> 
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td> 
                    <td>'.$field4name.'</td> 
                    <td>'.$field5name.'</td> 
                    <td>HIRE</a></td> 
                </tr>';
        }


    ?>
    </body> <a href="../"   
</html>
