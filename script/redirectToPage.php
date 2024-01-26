<?php
ini_set('display_errors', 1);
include('dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $artistName = htmlspecialchars($_GET["searchParm"]);

    $sql = "SELECT pageName FROM artist WHERE artistName = '$artistName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pageName = $row['pageName'];
            header("location: $pageName");
        }
    } else {
        $artworkName = htmlspecialchars($_GET["searchParm"]);
        $sql = "SELECT pageName FROM artwork WHERE artworkName = '$artworkName'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pageName = $row['pageName'];
                header("location: $pageName");
            }
        } else {
            $categoryName = htmlspecialchars($_GET["searchParm"]);
            $sql = "SELECT pageName FROM category WHERE categoryName = '$categoryName'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $pageName = $row['pageName'];
                    header("location: $pageName");
                }
            }
        }
    }
}

$conn->close();
?>
