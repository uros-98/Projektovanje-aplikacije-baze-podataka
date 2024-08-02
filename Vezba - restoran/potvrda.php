<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Potvrda rezervacije</title>
</head>
<body>
    
    <div class="card">
        <div class="card-title">Cestitamo! Vasa rezervacija je potvrdjena
            <div class="card-body">
                <?php

                include 'php/db.php';

                if($_SERVER['REQUEST_METHOD']==='POST') {
                    $ime = $_POST['ime'];
                    $datum = $_POST['datum'];
                    $vreme = $_POST['vreme'];

                    $sql = "SELECT ime, datum, datum FROM rezervacije";

                    $rezultat = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($rezultat) === 1) {
                        $rezervacija = mysqli_fetch_assoc($rezultat);
                    } else {
                        header("Location: ../index.php");
                        exit();
                    }
                }
                ?>

                <p>Vase potvrda sa imenom <?php echo $rezervacija['ime']?> i datumom <?php echo $rezervacija['datum']?> i vremenom u <?php echo $rezervacija['vreme']?>.</p>
            
                <p>
                    <a href="index.php">Za nastavak pretrazivanja, vratite se nazad.</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>