
<?php

$host = 'localhost';
$user = 'dummrkdf_ameri_admin';
$pass = 'admin@ameri123';
$db_name = 'dummrkdf_amerirentacar';

    //database connection
    $db = mysqli_connect($host,$user,$pass,$db_name);

    //check connection 
    if($db -> connect_error){
        die("Connection failed: " . $db -> connect_error);
    }

?>
