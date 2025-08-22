<!DOCTYPE html>
<html>
<body>
  <form method="get" action="bt4_get.php">
    Tên sách: <input name="book"><br>
    Tác giả: <input name="author"><br>
    Nhà xuất bản: <input name="publisher"><br>
    Năm xuất bản: <input name="year" type="number"><br>
    <button type="submit">Gửi</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET)) {
      echo "<h3>Kết quả (GET):</h3>";
      echo "Tên sách: " . htmlspecialchars($_GET["book"]) . "<br>";
      echo "Tác giả: " . htmlspecialchars($_GET["author"]) . "<br>";
      echo "Nhà xuất bản: " . htmlspecialchars($_GET["publisher"]) . "<br>";
      echo "Năm xuất bản: " . htmlspecialchars($_GET["year"]);
  }
  ?>
</body>
</html>