<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styleregister.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="text-center">
            <div class="card-title">Registracija</div>
            </div>
            <div class="card-body">
                <form action ="php/registracija.php" method="post">
                    <div class="form-group">
                        <label for="ime">Ime</label>
                        <input type="text" class="form-control" id="ime" name="ime" required>
                    </div>
                    <div class="form-group">
                        <label for="prezime">Prezime</label>
                        <input type="text" class="form-control" id="prezime" name="prezime" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="sifra">Sifra</label>
                        <input type="password" class="form-control" id="sifra" name="sifra" required>
                    </div>
                    <div class="form-group">
                        <label for="kontakt">Kontakt</label>
                        <input type="number" class="form-control" id="kontakt" name="kontakt" required>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registruj se</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>