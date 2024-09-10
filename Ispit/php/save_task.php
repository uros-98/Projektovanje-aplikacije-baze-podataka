<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ispit";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die('Greška u konekciji: ' . $mysqli->connect_error);
    }

    foreach ($_SESSION['tasks'] as $task) {
        $title = $mysqli->real_escape_string($task['title']);
        $description = $mysqli->real_escape_string($task['description']);

        $query = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
        $mysqli->query($query);
    }

    $mysqli->close();

    unset($_SESSION['tasks']);

    header('Location: ../index.php');
    exit();
?>
