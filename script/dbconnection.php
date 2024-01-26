<?php
$servername = "localhost";
$username = "daaalrijjal";
$password = "Danao137";
$database = "ArtGallery";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

