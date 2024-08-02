<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Pocetna stranica</title>
</head>
<body>
     <?php 

            if(!isset($_SESSION['korisnik_id'])) {
                header("Location: login.php");
                exit();
            }

            include 'php/db.php';
            
            $sql = "SELECT username FROM korisnici";
            $rezultat = mysqli_query($conn, $sql);

            if(mysqli_num_rows($rezultat) === 1) {
                $korisnik = mysqli_fetch_assoc($rezultat);
                $imePrezime = $korisnik['username'];
            }
            else {
                $imePrezime = 'Nepoznati korisnik';
            }
        ?>

    <div class="card">
        <div class="card-title">Dobrodosli
            <?php echo $imePrezime?>
        </div>
       
            <div class="card-body">
                <h2>Rezervisite vas restoran na vreme!<h2>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Naziv</th>
                                <th>Lokacija</th>
                                <th>Telefon</th>
                                <th>Email</th>
                            </tr>
                        </thead>
            <?php
            include_once 'php/db.php';
                $upit = "SELECT naziv, lokacija, telefon, email FROM restoran";
                $rezultat = mysqli_query($conn, $upit);
                if(!$rezultat) {
                    die("Greska" . mysqli_error($conn));
                }
            ?>

            <?php while ($restoran = mysqli_fetch_assoc($rezultat)) {?>
                <tr>
                    <td><?php echo $restoran['naziv']?></td>
                    <td><?php echo $restoran['lokacija']?></td>
                    <td><?php echo $restoran['telefon']?></td>
                    <td><?php echo $restoran['email']?></td>
                    <td>
                        <button type="submit" class="btn btn-warning">
                            <a href="rezervisisto.php">Rezervisi sto</a>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-warning">
                            <a href="rez.php">Rezervacija</a>
                        </button>
                    </td>
                </tr>
                        <?php } ?>
                    </table>
            </div>
    </div>
    
    <button type="submit" class="btn btn-warning">
        <a href="php/logout.php">Odjavi se</a>
    </button>
</body>
</html>