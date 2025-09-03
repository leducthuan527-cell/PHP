<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "b5_mydb";

$ketnoi = new mysqli($server, $username, $password, $database);

if ($ketnoi->connect_error) {
    die("Failed connection" . $ketnoi->connect_error);
}

$sql = "DELETE FROM MyGuests WHERE id=3";

if ($ketnoi->query($sql) === TRUE) {
    echo "Deleted<br>";
} else {
    echo "Error while deleting" . $ketnoi->error;
}

$ketnoi->close();
?>
