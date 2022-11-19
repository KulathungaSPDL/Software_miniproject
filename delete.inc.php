<?php 
session_start();

$mysqli = new mysqli('localhost', 'root','','softwareminiproject') or die(mysqli_error($mysqli)); 

//delete contact

if(isset($_GET['delete'])){
	$contactid = $_GET['delete'];
	
		$con = mysqli_connect("localhost","root" , "" , "softwareminiproject");
		$dbs = "DELETE FROM contracts WHERE contractid ='$contactid'";
		mysqli_query($con, $dbs);
			
		echo "<script> alert('Delete Successfull!');window.location='data.php'</script>";
}							

else{
echo "<script> alert('Delete Fail!');window.location='data.php'</script>";
}
	
?>