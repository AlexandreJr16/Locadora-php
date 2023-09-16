<?php
<<<<<<< HEAD
$air_servername = "localhost";
$air_username = "root";
$air_password = "root";
$air_dbname = "locadora";
// Create connection
$air_conn = mysqli_connect($air_servername, $air_username, $air_password, $air_dbname);
// Check connection
if (!$air_conn) {
=======
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "locadora";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
>>>>>>> cfde09b1a94ee41a0a839a5ad39918e032d7fb2d
    die("Connection failed: " . mysqli_connect_error());
}
?>