<?php
ini_set('display_errors', 1);
include('dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updateArtworkID = htmlspecialchars($_POST["updateArtworkID"]);
    $newArtworkName = htmlspecialchars($_POST["newArtworkName"]);

   
    $sql = "UPDATE artwork SET artworkName='$newArtworkName' WHERE artworkID='$updateArtworkID'";

    try {
        if (mysqli_query($conn, $sql)) {
            session_start();
            $_SESSION['success_message'] = "Artwork updated successfully!";
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

