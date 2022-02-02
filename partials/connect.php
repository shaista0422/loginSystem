<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shaista";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    //     echo " Connection made successfully!!!";
    // } else {
    die("Can't connect to database :( " . mysqli_connect_error());
}
