<?php

    include 'db.php';

    session_start();

    if(isset($_SESSION['korisnik_id'])) {
        header("Location: ../index.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $lozinka = $_POST['password'];

        $sql = "SELECT * FROM korisnici 
        WHERE email = '$email'";

        $rezultat = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rezultat) === 1) {
            $korisnik = mysqli_fetch_assoc($rezultat);
            if (password_verify($lozinka, $korisnik['password'])) {
                $_SESSION['korisnik_id'] = $korisnik['id'];
                header("Location: ../index.php");
                exit();
            }
        }

        echo "Pogresna email adresa ili lozinka.";
    }

    mysqli_close($conn);

?>