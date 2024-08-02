<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ime = $_POST['ime'];
        $datum = $_POST['datum'];
        $vreme = $_POST['vreme'];

        $upit = "INSERT INTO rezervacije (ime, datum, vreme) 
        VALUES ('$ime', '$datum', '$vreme')";

        if (mysqli_query($conn, $upit)) {
            echo "Uspesna rezervacija";
        } else {
            echo "Greska prilikom rezervacije" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);

?>