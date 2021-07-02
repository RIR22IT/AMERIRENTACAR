<?php include ('../database/connection.php');

	// initialize variables
    $id=0;
    $category = "";
    $vehicle = "";
    $twohourand30Km = "";
    $fourhourand40Km = "";
    $eighthourand80Km = "";
    $excessHours = "";
    $excessMileage = "";


	if (isset($_POST['wedding'])) {
        $category = $_POST['category'];
        $vehicle = $_POST['vehicle'];
        $twohourand30Km = $_POST['2hourand30Km'];
        $fourhourand40Km = $_POST['4hourand40Km'];
        $eighthourand80Km = $_POST['8hourand80Km'];
        $excessHours = $_POST['excessHours'];
        $excessMileage = $_POST['excessMileage'];
		
		$qry = "INSERT INTO weddingrates (category, vehicle, 2hourand30Km, 4hourand40Km, 8hourand80Km, excessHours, excessMileage) VALUES ('$category', '$vehicle', '$twohourand30Km', '$fourhourand40Km', '$eighthourand80Km', '$excessHours', '$excessMileage')"; 
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully"; 
     
    }
		
    if (isset($_POST['wedUpdate'])) {
        $id = $_POST['id'];
        $category = $_POST['category'];
        $vehicle = $_POST['vehicle'];
        $twohourand30Km = $_POST['2hourand30Km'];
        $fourhourand40Km = $_POST['4hourand40Km'];
        $eighthourand80Km = $_POST['8hourand80Km'];
        $excessHours = $_POST['excessHours'];
        $excessMileage = $_POST['excessMileage'];
		
        mysqli_query($db, "UPDATE weddingrates SET category='$category', vehicle='$vehicle', 2hourand30Km='$twohourand30Km', 4hourand40Km='$fourhourand40Km', 8hourand80Km='$eighthourand80Km', excessHours='$excessHours', excessMileage='$excessMileage' WHERE id=$id");
        $_SESSION['message'] = "Updated successfully!"; 
        header('location: viewWeddingRates.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM weddingrates WHERE id=$id");
        $_SESSION['message'] = "Deleted successfully!"; 
        header('location: viewWeddingRates.php');
    }
