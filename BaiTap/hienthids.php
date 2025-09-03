<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "b5_mydb";

$ketnoi = new mysqli($server, $username, $password, $database);

if ($ketnoi->connect_error) {
    die("Failed connection" . $ketnoi->connect_error);
}

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $ketnoi->query($sql);

echo "<h2>Danh sách nhân viên</h2>";
echo "<table border='1' cellspacing='0' cellpadding='5'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Reg_Date</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["firstname"]."</td>
        <td>".$row["lastname"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["reg_date"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No available data</td></tr>";
}
echo "</table>";

$ketnoi->close();
?>
