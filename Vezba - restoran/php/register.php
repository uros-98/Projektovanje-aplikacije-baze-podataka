<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO korisnici (ime, prezime, email, username, password) 
        VALUES ('$ime', '$prezime', '$email', '$username', '$password_hash')";

        if(mysqli_query($conn, $sql)) {
            echo "Uspesna registracija!";
            header("Location: ../index.php");
        } else {
            echo "Greska pri registraciji! " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);

?>