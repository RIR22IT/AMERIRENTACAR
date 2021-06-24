<?php include ('../database/connection.php');

	// initialize variables
    $img = [];
	$model = "";
	$year = 0;
    $engine = 0;
	$rental = 0;
    $week = 0;
    $month = 0;
    $passenger = 0;
    $luggage = 0;
	$type = "";
    $transmission = "";
    $fuel = "";
	$door = "";
    $musicOn = "";
    $ac = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
        $img = $_FILES['img']['name'];
		$model = $_POST['model'];
		$year = $_POST['year'];
        $engine = $_POST['engine'];
		$rental = $_POST['rental'];
        $week = $_POST['week'];
        $month = $_POST['month'];
        $passenger = $_POST['passenger'];
        $luggage = $_POST['luggage'];
		$type = $_POST['type'];
        $transmission = $_POST['transmission'];
		$fuel = $_POST['fuel'];
        $door = $_POST['door'];
        $musicOn = $_POST['musicOn'];
        $ac = $_POST['ac'];
		
         if(file_exists("upload/".$_FILES["img"]["name"]))
        {
           $store = $_FILES["img"]["name"];
           $_SESSION['status'] = "Image already exists. '.$store.'";
     
        }else{

		$qry = "INSERT INTO car (img, model, year, engine, rental, week, month, passenger, luggage, type, transmission, fuel, door, musicOn, ac) VALUES ('$img', '$model', '$year', '$engine', '$rental', '$week', '$month', '$passenger','$luggage', '$type', '$transmission', '$fuel', '$door','$musicOn', '$ac')"; 
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully"; 
        if($run){
            move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
          }
          else{
            $_SESSION['success'] = "not added";
          }
         }
        }
		
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $model = $_POST['model'];
		$year = $_POST['year'];
        $engine = $_POST['engine'];
		$rental = $_POST['rental'];
        $week = $_POST['week'];
        $month = $_POST['month'];
        $passenger = $_POST['passenger'];
        $luggage = $_POST['luggage'];
		$type = $_POST['type'];
        $transmission = $_POST['transmission'];
		$fuel = $_POST['fuel'];
        $door = $_POST['door'];
        $musicOn = $_POST['musicOn'];
        $ac = $_POST['ac'];
		
        mysqli_query($db, "UPDATE car SET model='$model', year='$year', engine='$engine', rental='$rental', week='$week', month='$month', passenger='$passenger' , luggage='$luggage', type='$type', transmission='$transmission', fuel='$fuel', door='$door' , musicOn='$musicOn', ac='$ac' WHERE id=$id");
        $_SESSION['message'] = "Updated successfully!"; 
        header('location: viewDashboard.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM car WHERE id=$id");
        $_SESSION['message'] = "Deleted successfully!"; 
        header('location: viewDashboard.php');
    }
