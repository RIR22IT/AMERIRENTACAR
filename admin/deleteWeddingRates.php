<?php include('../database/connection.php');

if(!$db){
	die('error in db' . mysqli_error($conn));
}

$id = $_GET['id'];

$qry = "DELETE FROM weddingrates WHERE id = $id";
if(mysqli_query($db, $qry)){
	header('location: viewWeddingRates.php');
}else{
	echo mysqli_error($db);
}

?>