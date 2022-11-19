<?php

$mysqli = new mysqli('localhost', 'root','','softwareminiproject') or die(mysqli_error($mysqli)); 

if(isset($_POST['submit'])){

	$contactid = $_POST['contactid'];
	$elevatorid = $_REQUEST['elevator'];
	$date = $_POST['storedate'];

	
  $mysqli->query( "UPDATE contracts SET elevatorid='$elevatorid',date= '$date' WHERE contractid ='$contactid'") or die($mysqli->error);

echo "<script> alert('Record update successfull!');window.location='data.php'</script>";

} else{
		header("Location: data.php?error= can't insert value");
}
?>