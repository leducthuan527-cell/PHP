<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";

for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Tensach$i</td>";
    echo "<td>Noidung$i</td>";
    echo "</tr>";
}

echo "</table>";
?>
