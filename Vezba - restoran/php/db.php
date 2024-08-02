<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "restoran";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Greska pri registraciji: " .$conn->connect_error);
    }

?>