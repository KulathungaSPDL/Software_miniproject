<?php
session_start();

$con = mysqli_connect("localhost","root" , "" , "softwareminiproject");


$username =$_SESSION['username'];

// get user if form session
$sql = "SELECT * FROM famer WHERE username = '$username';";
$results = mysqli_query($con,$sql);
$resultsCheck= mysqli_num_rows($results);

if($resultsCheck>0) {
    while ($row = mysqli_fetch_assoc($results)) {
$famerid = $row['id'];
}}


if (isset($_POST['submit'])){
    $seedcompid = $_REQUEST['company'];
    $qty = $_POST['qty'];
    $seedtype = $_POST['seedtype'];

    $dbs = "INSERT INTO contracts (id, seedcompid, qty , seedtype) VALUES ('$famerid','$seedcompid','$qty','$seedtype')";
    /*in here data adda user table and account table*/
    mysqli_query($con, $dbs);
    
    header("Location:data.php");
    echo "<script> alert('Your contact create successfull!');window.location='data.php''</script>";

} else {
    echo "<script> alert('Databae not connected!');window.location='contruct.php''</script>";
}