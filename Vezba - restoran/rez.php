<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/stylerez.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Rezervacija</title>
</head>
<body>
    <div class="container">
        <h4>Popunite formu za rezervaciju vaseg omiljenog restorana</h4>
        <form action="rezervacija.php" method="post">
            <div class="form-group">
            <label for="ime">Ime</label>
            <input type="text" class="form-control" id="ime" name="ime" required>
            </div>
            <div class="form-group">
                <label for="Prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" name="prezime" required> 
            </div>
            <div class="form-group">
                <label for="datum">Datum</label>
                <input type="date" class="form-control" id="datum" name="datum" required>
            </div>
            <div class="form-froup">
                <label for="vreme">Vreme</label>
                <input type="time" class="form-control" id="vreme" name="vreme" required>
            </div>
            <div class="form-group">
                <label for="sto">Izaberite sto:</label>
                <select id="sto" name="sto" class="form-control">
                    <option value="sto1">Sto br.1</option>
                    <option value="sto2">Sto br.2</option>
                    <option value="sto3">Sto br.3</option>
            </div>
        <button type="submit" class="btn btn-warning">Potvrdi
            </button>
        </form>
    </div>
    
</body>
</html>