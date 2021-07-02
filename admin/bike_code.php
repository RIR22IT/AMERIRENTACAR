<?php include ('../database/connection.php');

	// initialize variables
    $id=0;
    $category = "";
    $vehicle = "";
    $dailyrental = "";
    $weekrate = "";


	if (isset($_POST['bike'])) {
        $category = $_POST['category'];
        $vehicle = $_POST['vehicle'];
        $dailyrental = $_POST['dailyrental'];
        $weekrate = $_POST['weekrate'];
		
		$qry = "INSERT INTO bikerates (category, vehicle, dailyrental, weekrate) VALUES ('$category', '$vehicle', '$dailyrental', '$weekrate')"; 
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully"; 
     
    }
		
    if (isset($_POST['bikeUpdate'])) {
        $id = $_POST['id'];
        $category = $_POST['category'];
        $vehicle = $_POST['vehicle'];
        $dailyrental = $_POST['dailyrental'];
        $weekrate = $_POST['weekrate'];
		
        mysqli_query($db, "UPDATE bikerates SET category='$category', vehicle='$vehicle', dailyrental='$dailyrental', weekrate='$weekrate' WHERE id=$id");
        $_SESSION['message'] = "Updated successfully!"; 
        header('location: viewBikeRate.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM bikerates WHERE id=$id");
        $_SESSION['message'] = "Deleted successfully!"; 
        header('location: viewBikeRate.php');
    }
