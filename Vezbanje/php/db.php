<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteka";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Niste dobro povezani sa bazom". $conn->connect_error);
    }

?>
