<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Log in page</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-title">
                <h4>Prijava korisnika</h4>
                <div class="card-body"></div>
        <form action="php/log.php" method="post">
            <div class="form-group">
                <label for="ime">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-warrning">Prijavi se</button>
            </div>    
            <div class="text-center mt-3">
                <a href="registracija.php">Nemate nalog? Registrujte se</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>