<?php
include('./database/connection.php');


//Insert data into the db

if (isset($_GET['book'])) {
    $vehicleId = $_GET['vehicleID'];
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    $qty = $_GET['qty'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $companyname = $_GET['companyname'];
    $country = $_GET['country'];
    $streat = $_GET['streat'];
    $unit = $_GET['unit'];
    $city = $_GET['city'];
    $postcode = $_GET['postcode'];
    $phone = $_GET['phone'];
    $emailaddress = $_GET['emailaddress'];
    $information = $_GET['information'];
    $subTot = $_GET['subTot'];

    $qry = "INSERT INTO checkout (vehicleId, pickDate, dropDate, qty, firstname, lastname, companyname, country, streat, unit, city, postcode, phone, emailaddress, information,subTot) VALUES ('$vehicleId', '$startDate', '$endDate', '$qty', '$firstname', '$lastname', '$companyname', '$country', '$streat', '$unit', '$city', '$postcode', '$phone', '$emailaddress', '$information', '$subTot')";
    $run = mysqli_query($db, $qry);
    $_SESSION['message'] = "Added successfully";


//Get vehicle details according to the vehicleID
$qry = "select * from car where id = $vehicleId";
$run = $db->query($qry);
if ($run->num_rows > 0) {
    while ($row = $run->fetch_assoc()) {
        $id = $row['id'];
        $model = $row['model'];
        $year = $row['year'];
        $engine = $row['engine'];
        $rental = $row['rental'];
        $passenger = $row['passenger'];
        $luggage = $row['luggage'];
        $make = $row['make'];
        $transmission = $row['transmission'];
        $fuel = $row['fuel'];
        $door = $row['door'];
        $musicOn = $row['musicOn'];
        $ac = $row['ac'];
        $img = $row['img'];
    }
}

// Check for empty fields
// if (empty($_GET['firstname']) || empty($_GET['emailaddress']) || empty($_GET['vehicleId']) || !filter_var($_GET['emailaddress'], FILTER_VALIDATE_EMAIL)) {
//     echo json_encode(array('error' => 'true'));
//     return false;
// }

//    $name = $_POST['name'];
//    $email_address = $_POST['email'];
//    $message = $_POST['message'];

//    $lastname = $_POST['lastname'];
//    $phone = $_POST['phone'];
//    $subject = ($_POST['subject'] ? $_POST['subject'] : "Website Contact Form: $name");

// Create the email and send the message
$to =  'thisaradilshanbens99@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Your Booking Confirmed with AMERIRENTACAR";
$email_body = "Vehicle has received  from your website.\n\n" . "Here are the details:\n\nName: \n\nLast Name: $lastname\n\nEmail: $emailaddress\n\nPhone: $phone\n\nVehicle: $make\n\nVehicle Model: $model\n\nPickup Date: $startDate\n\nDropOff Date: $endDate\n\nSub Total: $subTot";
$headers = "From: $emailaddress\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $emailaddress";
mail($to, $email_subject, $email_body, $headers);
// echo json_encode(array('success' => 'true'));
// return true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Message</title>
</head>

<body>

    <h1>Thank You</h1>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>