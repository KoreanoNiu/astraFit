<?php 
    $servername = "localhost";
    $database = "databasename";
    $username = "username";
    $password = "password";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }else{
        mysqli_close($conn);
    }
?>