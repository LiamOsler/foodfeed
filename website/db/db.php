<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "foodfeed_db";
$dbconn = new mysqli($host, $username, $password, $dbname);

//Check for DB connection:
    if($dbconn->connect_error){
        die();
    }
    else{
        //echo "<p>Connected</p>";
    }
?>