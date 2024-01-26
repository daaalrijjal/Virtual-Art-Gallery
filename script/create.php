<?php
ini_set('display_errors', 1);
include('dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artworkName = htmlspecialchars($_POST["artworkName"]);
    
    $sql = "INSERT INTO artwork (artworkName) VALUES ('$artworkName')";
    
    try {
        if (mysqli_query($conn, $sql)) {       
            session_start();
            $_SESSION['success_message'] = "Artwork added successfully!";
            header("location: dashboard.php");
            exit();
        } 
    } catch (Exception $e) {
        session_start();
        $_SESSION['error_message'] = "Failed attempt! Try again.";
        header("location: dashboard.php");
        exit();
    }
}

mysqli_close($conn);
?>

