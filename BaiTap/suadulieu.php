<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "b5_mydb";

$ketnoi = new mysqli($server, $username, $password, $database);

if ($ketnoi->connect_error) {
    die("Failed connection" . $ketnoi->connect_error);
}

$sql = "UPDATE MyGuests SET firstname='Jane' WHERE firstname='James'";

if ($ketnoi->query($sql) === TRUE) {
    echo "Updated<br>";
} else {
    echo "Error while updating" . $ketnoi->error;
}

$ketnoi->close();
?>
