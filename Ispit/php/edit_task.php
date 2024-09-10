<?php
session_start();

if (isset($_GET['index']) && isset($_SESSION['tasks'][$_GET['index']])) {
    $index = $_GET['index'];
    $task = $_SESSION['tasks'][$index];
} else {
    header('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $_SESSION['tasks'][$index] = [
        'title' => $title,
        'description' => $description
    ];

    header('Location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Izmena zadatka</title>
</head>
<body>

<h1>Izmena zadatka</h1>
<form action="" method="post">
    <label for="title">Naziv:</label>
    <input type="text" name="title" id="title" value="<?php echo ($task['title']); ?>" required><br><br>
    <label for="description">Opis:</label>
    <input type="text" name="description" id="description" value="<?php echo ($task['description']); ?>" required><br><br>
    <input type="submit" value="Izmeni zadatak">
</form>

</body>
</html>
