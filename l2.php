<?php

$host = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbname = "storemyresult";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
         die('Connect failed : '. $conn->connect_error);
    }

//Form data
$USN=$_POST['USN'];
$password=$_POST['password'];

session_start();
$_SESSION["USN"] = $USN;


$query="SELECT * from result where USN='$USN' and pass='$password'";
    if(mysqli_num_rows(mysqli_query($conn,$query))>0)
    {
        //HOME
        $_SESSION["USN"] = $USN;
     header("Location:result.php");
        exit();
    }
    else {
        header("Location:signup.html");
    }
    
?>

