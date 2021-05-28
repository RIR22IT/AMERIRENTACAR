<?php
include('./database/connection.php');



//Insert data into the db

if(isset($_GET['book'])){
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $companyname = $_POST['companyname'];
    $country = $_POST['country'];
    $streat = $_POST['streat'];
    $unit = $_POST['unit'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $emailaddress = $_POST['emailaddress'];
    $information = $_POST['information'];

    $qry = "INSERT INTO checkout (firstname, lastname, companyname, country, streat, unit, city, postcode, phone, emailaddress, information) VALUES ('$firstname', '$lastname', '$companyname', '$country', '$streat', '$unit', '$city', '$postcode', '$phone', '$emailaddress', '$information')"; 
    $run = mysqli_query($db, $qry);
    $_SESSION['message'] = "Added successfully"; 
}


?>