<?php
$server = "localhost";
$username = "root";
$password = "";
$databse = "b5_mydb";

$ketnoi = new mysqli($server, $username, $password, $databse);

if ($ketnoi->connect_error) {
    die("Failed connection" . $ketnoi->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES 
('John', 'Doe', 'john@example.com'),
('Jane', 'Smith', 'jane@example.com'),
('James', 'Johnson', 'james@example.com'),
('Emily', 'Brown', 'emily@example.com'),
('Michael', 'Davis', 'michael@example.com')";

if ($ketnoi->query($sql) === TRUE) {
    echo "Successfully added data";
} else {
    echo "Error: " . $ketnoi->error;
}

$ketnoi->close();
?>
