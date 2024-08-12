<?php
    include 'db.php';
    
    session_start();
    if(isset($_SESSION['korisnik_id'])){
        header("Location:../pocetna.php");
        exit();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $sifra = $_POST['sifra'];

            $upit = "SELECT * FROM clan WHERE email = '$email'";

            $rezultati = mysqli_query($conn, $upit);

            if(mysqli_num_rows($rezultati) === 1){
                $korisnik = mysqli_fetch_assoc($rezultati);
                if(password_verify($sifra, $korisnik['sifra'])){
                    $_SESSION['korisnik_id'] = $korisnik['id'];
                    header("Location:../pocetna.php");
                    exit();
                }
            }
        }
        echo 'decko ti si debil';

    }

?>