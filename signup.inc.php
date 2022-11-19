<?php

include 'dbConnector.inc.php';


// Create connection
$con = mysqli_connect("localhost","root" , "" , "softwareminiproject");
// Check connection

    if(isset($_POST['submit'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $username = $_POST['username'];
	$password = $_POST['password'];

// first name Validation starts here...
	if(empty($firstname)) {
            header("Location:signup.php?error=emptyfields&username=$username");
            exit();
        }
	else if(empty($lastname)) {
            header("Location:signup.php?error=emptyfields&firstname=$firstname");
            exit();
        }
	else if(empty($username)) {
            header("Location:signup.php?error=emptyfields&lastname=$lastname");
            exit();
        }
	else if(empty($password)) {
            header("Location:signup.php?error=emptyfields&password=$password");
            exit();
        }
    else    {

             //unique Id check...

             $con = mysqli_connect("localhost","root" , "" , "softwareminiproject");

             $username = $_POST['username'];

             $sql = "SELECT * FROM famer WHERE username = '$username'";
             $result = $con ->query($sql);
            /*must want to add hash password*/
             // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
             $password = md5($password);							

             if(!$row = $result -> fetch_assoc()){
                 
                 $dbs = "INSERT INTO famer (firstname, lastname, username, password) VALUES ('$firstname','$lastname','$username','$password')";
                 /*in here data adda user table and account table*/
                 mysqli_query($con, $dbs);
                 
                 // header("Location:login.php");
                 echo "<script> alert('Your account create successfull!');window.location='login.html'</script>";
             }
             else{
                 //header("Location: signup.php?error=id_exist&username=$username&fitstname=$firstname&lastname=$lastname&address=$address&city=$city&id=$nic&bday=$bday&mobile=$mobile&emai=$email&password=$password&re-password=$repassword&accname=$accname&accnum=$accnum&bankname=$bankname&branch=$branch");
                 echo "<script> alert('Someone alredy get that username!');window.location='signup.php'</script>";
             }
        }
    }
    else{
        header("Location: login.php?login=error ");
    }
