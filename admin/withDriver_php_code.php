<?php include('../database/connection.php');

//initialize variables
$vehicle = "";
$category = "";
$perDay = "";
$ExcessMileage     = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $vehicle = $_POST['vehicle'];
    $category = $_POST['category'];
    $perDay = $_POST['perDay'];
    $ExcessMileage = $_POST['ExcessMileage'];

    $qry = "INSERT INTO withdriverrates (vehicle, category, perDay, ExcessMileage) VALUES ('$vehicle', '$category', '$perDay', '$ExcessMileage')";
    if ($run = mysqli_query($db, $qry)) {
        $_SESSION['message'] = "Added successfully";
    } else {
        $_SESSION['success'] = "not added";
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $vehicle = $_POST['vehicle'];
    $category = $_POST['category'];
    $perDay = $_POST['perDay'];
    $ExcessMileage = $_POST['ExcessMileage'];

    mysqli_query($db, "UPDATE withdriverrates SET vehicle='$vehicle', category='$category', perDay='$perDay', ExcessMileage='$ExcessMileage' WHERE id=$id");
    $_SESSION['message'] = "Updated successfully!"; 
    header('location: viewWithDriver.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM withdriverrates WHERE id=$id");
    $_SESSION['message'] = "Deleted successfully!"; 
    header('location: viewWithDriver.php');
}




