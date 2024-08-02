<?php
    include 'db.php';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $broj = $_POST['broj'];
        $kapacitet = $_POST['kapacitet'];

        $upit = "INSERT INTO stolovi (broj, kapacitet) 
        VALUES ('$broj', '$kapacitet')";

        if (mysqli_query($conn, $upit)) {
            echo "Uspesna rezervacija.";
            header("Location: ../index.php");
        } else {
            echo "Greska" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);

?>