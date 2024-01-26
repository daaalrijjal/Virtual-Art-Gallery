<?php
ini_set('display_errors', 1);
include('dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artworkID = htmlspecialchars($_POST["deleteArtworkID"]);

    $sql = "DELETE FROM artwork WHERE artworkID='$artworkID'";

    try {
        if (mysqli_query($conn, $sql)) {       
            session_start();
            $_SESSION['success_message'] = "Artwork deleted successfully!";
            header("location: dashboard.php");
            exit();
        } 
    } catch (Exception $e) {
        session_start();
        $_SESSION['error_message'] = "Failed attempt! Try again.";
        header("location: dashboard.php");
        exit();
    }
    
    mysqli_close($conn);
}
?>
