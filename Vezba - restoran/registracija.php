<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Registracija</title>
</head>
<body>
    
    <div class="container">
            <form action="php/register.php" method="post">
                <h1>Registracija</h1>
                <div class="form-group">
                    <label for="name">Ime:</label>
                    <input type="text" class="form-control" id="ime" name="ime" required>
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime:</label>
                    <input type="text" class="form-control" id="prezime" name="prezime" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-warning">Registruj se</button>
            </form>
    </div>


</body>
</html>