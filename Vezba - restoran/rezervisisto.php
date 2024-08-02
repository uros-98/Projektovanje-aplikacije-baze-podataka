<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesto.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Rezervacija stola</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
            <form action="php/sto.php" method="post">
                <div class="form-group">
                    <label for="broj">Broj stola</label>
                    <input type="number" class="form-control" id="broj" name="broj">
                </div>
                <div class="form-group">
                    <label for="kapacitet">Kapacitet stola</label>
                    <input type="text" class="form-control" id="kapacitet" name="kapacitet">
                </div>
                <button type="submit" class="btn btn-warning">Rezervisi</button>
            </div>
        </div>
    </div>
</body>
</html>