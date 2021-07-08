<?php
    include("./database/connection.php");

    //Insert data into the db
    
    if (isset($_POST['book'])) {
        $vehicleId = $_POST['vId'];
        $sDate = $_POST['pDate'];
        $eDate = $_POST['dDate'];
        $quantity = $_POST['quantity'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $companyname = $_POST['companyname'];
        $country = $_POST['country'];
        $streat = $_POST['streat'];
        $unit = $_POST['unit'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $phone = $_POST['phone'];
        $emailaddress = $_POST['emailaddress'];
        $information = $_POST['information'];
        $subtot = $_POST['subtot'];
        $pickLoc = $_POST['pickLoc'];
        $dropLoc = $_POST['dropLoc'];

        $qry = "INSERT INTO checkout (vehicleId, pickDate, dropDate, qty, firstname, lastname, companyname, country, streat, unit, city, postcode, phone, emailaddress, information, subTot, pickLoc, dropLoc) VALUES ('$vehicleId', '$sDate', '$eDate', '$quantity', '$firstname', '$lastname', '$companyname', '$country', '$streat', '$unit', '$city', '$postcode', '$phone', '$emailaddress', '$information', '$subtot', '$pickLoc', '$dropLoc')";
        
        if (mysqli_query($db, $qry)) {
            $_SESSION['status'] = "Your booking has been confirmed";
            $_SESSION['status_code'] = "success";
            
        } else {
            echo mysqli_error($db);
            $_SESSION['status'] = "Your booking has not confirmed";
            $_SESSION['status_code'] = "error";
        }
    
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
                $type = $row['type'];
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
 $to =  'amerirentacar@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
 $email_subject = "Your Booking Confirmed with AMERIRENTACAR";
 $email_body = "Vehicle has received  from your website.\n\n" . "Here are the details!!\n\nName: $firstname \n\nLast Name: $lastname\n\nEmail: $emailaddress\n\nPhone: $phone\n\nVehicle: $type\n\nVehicle Model: $model\n\nPickup Date: $sDate\n\nDropOff Date: $eDate\n\nPickupLocation: $pickLoc\n\nDropOff location: $dropLoc\n\nSub Total: $ $subtot.00";
 $headers = "From: amerirentacar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
 $headers .= "Reply-To: amerirentacar";
 mail($to, $email_subject, $email_body, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="assets/css/styles.css" />
<!--fav-icon-->
<link rel="shortcut icon" href="fav-icon.png"/>
</head>
<body>

<div class="wrapper">
<div class="mail">
<div class = "cover"></div>
<div class="letter"><h3>Thank you for Booking!</h3></div>
</div>
<div class="vertical-center">
 <button><a href="index.php">BACK TO HOME</a></button>
</div>
</div>

<script>
 if (window.history.replaceState) {
     window.history.replaceState(null, null, window.location.href);
 }
</script>
</body>
</html>
