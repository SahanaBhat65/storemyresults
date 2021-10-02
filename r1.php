<?php
echo "test ok";
$host = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbname = "storemyresult";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
         die('Connect failed :'. $conn->connect_error);
    }
    else {
        echo "connection successful";
    }

//Form data
$username=$_POST['username'];
$USN=$_POST['USN'];
$pass=$_POST['pass'];


$INSERT = "INSERT INTO result(username, USN, pass) VALUES (?, ?, ?)";   //For inserting data
try {
    $stmt = $conn->prepare($INSERT);  
    $stmt->bind_param("sss",$username, $USN, $pass);
}
catch(Exception $e) {
    echo $e;
}

			$stmt->execute();
            $stmt->close();
            header("Location:signup.html");
            exit();
        

    $conn->close();
    
?>

 