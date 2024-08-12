<?php
    include 'php/db.php';

    session_start();

    if(!isset($_SESSION['korisnik_id'])){
        header('Location: index.php');
        exit();
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $email = $_POST['email'];
        $kontakt = $_POST['kontakt'];
    }
    $upit= 'SELECT ime, prezime, email, kontakt FROM clan';
    $rezultat = mysqli_query($conn, $upit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Dobro dosli</h1>
    <table>
        <thead>
            <tr>
                <th>ime</th>
                <th>prezime</th>
                <th>email</th>
                <th>kontakt</th>
            </tr>
            
        </thead>
        
        <?php 
            while($info = mysqli_fetch_assoc($rezultat)) {
        ?>
        <tr>
            <td><?php echo $info['ime']?></td>
            <td><?php echo $info['prezime']?></td>
            <td><?php echo $info['email']?></td>
            <td><?php echo $info['kontakt']?></td>
        </tr>

        <?php 
            }
        ?>    

    </table>

</body>
</html>