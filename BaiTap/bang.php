<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "b5_mydb";

$ketnoi = new mysqli($server, $username, $password, $database);

if ($ketnoi->connect_error) {
    die("Failed connection". $ketnoi->connect_error);
}

$sql = "CREATE TABLE MyGuests (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($ketnoi->query($sql) === TRUE) {
    echo "Tạo bảng MyGuests thành công";
} else {
    echo "Lỗi khi tạo bảng: " . $ketnoi->error;
}

$ketnoi->close();
?>