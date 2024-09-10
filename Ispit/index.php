<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>To-Do Lista</title>
</head>
<body>

<h1 class="text-center">Lista zadataka</h1>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv zadatka</th>
            <th>Opis zadatka</th>
            
        </tr>
    </thead>
    <tbody>
        <?php if (empty($_SESSION['tasks'])): ?>
            <tr>
                <td colspan="4">Nema zadataka.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo htmlspecialchars($task['title']); ?></td>
                <td><?php echo htmlspecialchars($task['description']); ?></td>
                <td>
                    <a class="btn btn-primary" href="php/edit_task.php?index=<?php echo $index; ?>">Izmeni</a> |
                    <a class="btn btn-primary" href="php/delete_task.php?index=<?php echo $index; ?>">Obriši</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<h2 class="text-center">Dodaj novi zadatak</h2>
    <form action="php/add_task.php" method="post">
        <div class="form-group">
            <label for="title">Naziv:</label>
            <input type="text" class="form-control" name="title" id="title" required></input>
        </div>
        <div class="form-group">
            <label for="description">Opis:</label>
            <input type="text" class="form-control" name="description" id="description" required></input>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Dodaj</button>
        </div>
    </form>
    
    <a class="btn btn-primary" href="php/save_task.php">Sacuvaj</a>
</body>
</html>
