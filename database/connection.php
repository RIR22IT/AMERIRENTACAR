<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'amerirentacar';

    //database connection
    $conn = mysqli_connect($host,$user,$pass,$db);

    //check connection 
    if($conn -> connect_error){
        die("Connection failed: " . $conn -> connect_error);
    }

?>