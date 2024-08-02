<?php

    include 'db.php';
    
    session_start();

    if(isset($_SERVER['korisnik_id'])) {
        session_unset();
        session_destroy();
    }

    header("Location: ../login.php");

    exit();

?>