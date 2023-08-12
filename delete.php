<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
}

include_once 'database.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete user from the database
    $sql = "DELETE FROM register WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
