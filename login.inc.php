<?php
session_start();

    if(isset($_POST['submit'])){

        include 'dbConnector.inc.php';

        $con = mysqli_connect("localhost","root" , "" , "softwareminiproject");

        $username = $_POST['username'];
        $password = $_POST['password'];
			
        if(empty($username)){
           // header("Location: login.php?login=empty_username");
            echo "<script > alert('Empty Username');window.location='index.php'</script>";
        }
        else{
        
            //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            $password = md5($password);
        
            $sql1 = "SELECT * FROM famer WHERE username = '$username' AND password = '$password'";
            $result1 = $con ->query($sql1);
        
        
            if(!$row = $result1 -> fetch_assoc()){
                //header("Location: login.php?login=wrong1");
                echo "<script> alert('Incorrect Password!');window.location='index.php'</script>";
            }
            else{
                $_SESSION['username']=$row['username'];
                header("Location: home.php");
            }
        }
    }
    else{
       // header("Location: user_home.php?login=error ");
        echo "<script> alert('Username and Password is not matched!');window.location='index.php'</script>";
    }



 


































