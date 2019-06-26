<?php
    $host = "localhost";
    $user= "root";
    $password = "";
    $database = "email";
    $conn = mysqli_connect($host,$user,$password,$database);
    if (!$conn){
        // echo "fail";
        exit;
    }
    else {
    	// echo "SUCCESS";
     //    echo "<br>";
    }

?>
