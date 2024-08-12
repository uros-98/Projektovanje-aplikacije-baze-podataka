<?php
    include 'db.php';
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $email = $_POST['email'];
        $sifra = $_POST['sifra'];
        $kontakt = $_POST['kontakt'];
        $sifra_hash = password_hash($sifra, PASSWORD_DEFAULT);

        $upit = "INSERT INTO clan(ime, prezime, email, sifra, kontakt) VALUES('$ime', '$prezime', '$email', '$sifra_hash', '$kontakt')";

        if(mysqli_query($conn, $upit)){
            echo 'Uspesno ste se registrovali';
            header("Location:../index.php");
            exit();
        } else{
            echo 'Neuspesna registracija';
        }
    }

?>