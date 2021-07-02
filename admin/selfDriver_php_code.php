<?php include('../database/connection.php');

//initialize variables
$vehicle = "";
$category = "";
$ratePerMonth = "";
$ratePerWeek = "";
$ExcessMileage = "";
$id = 0;


if (isset($_POST['save'])) {
    $vehicle = $_POST['vehicle'];
    $category = $_POST['category'];
    $ratePerMonth = $_POST['ratePerMonth'];
    $ratePerWeek = $_POST['ratePerWeek'];
    $ExcessMileage = $_POST['ExcessMileage'];

    $qry = "INSERT INTO selfdriverates (vehicle, category, ratePerMonth, ratePerWeek, ExcessMileage) VALUES ('$vehicle', '$category', '$ratePerMonth','$ratePerWeek', '$ExcessMileage')";
    $run = mysqli_query($db, $qry);
    $_SESSION['message'] = "Added successfully";

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $vehicle = $_POST['vehicle'];
    $category = $_POST['category'];
    $ratePerMonth = $_POST['ratePerMonth'];
    $ratePerWeek = $_POST['ratePerWeek'];
    $ExcessMileage = $_POST['ExcessMileage'];

    mysqli_query($db, "UPDATE selfdriverates SET vehicle='$vehicle', category='$category', ratePerMonth='$ratePerMonth', ratePerWeek='$ratePerWeek', ExcessMileage='$ExcessMileage' WHERE id=$id");
    $_SESSION['message'] = "Updated successfully!";
    header('location: viewSelfDriver.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM selfdriverates WHERE id=$id");
    $_SESSION['message'] = "Deleted successfully!";
    header('location: viewSelfDriver.php');
}
