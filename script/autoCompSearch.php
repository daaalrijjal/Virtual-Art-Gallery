<?php
require_once 'dbconnection.php';

$sql = "SELECT artistName FROM artist";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $fname[] = $row['artistName'];
    }

}

$sql = "SELECT categoryName FROM category";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $fname[] = $row['categoryName'];
    }

}

$sql = "SELECT artworkName FROM artwork";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $fname[] = $row['artworkName'];
    }

}


print json_encode($fname);
$conn->close();
?>