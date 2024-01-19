<?php
$servername = "localhost";
$databasename = "eva";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $databasename);
if (!$con) {
    die("failed to connect: " . mysqli_connect_error());
} else {
    echo "connection successful";
}
?>
