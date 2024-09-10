<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $_SESSION['tasks'][] = [
            'title' => $title,
            'description' => $description
        ];
    }

    header('Location: ../index.php');
    exit();
?>
