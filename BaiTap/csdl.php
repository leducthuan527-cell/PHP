<?php

$server = "localhost";
$username = "root";
$password = "";

$ketnoi = new mysqli($server, $username, $password);

if ($ketnoi->connect_error) {
    die("Failed connection". $ketnoi->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS b5_mydb";
if ($ketnoi->query($sql) === true) {
    echo "Successfully created database";
} else {
    echo "Error while creating database". $ketnoi->error;
}

$ketnoi->close();



?>