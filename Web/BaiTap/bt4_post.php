<!DOCTYPE html>
<html>
<body>
  <form method="post" action="bt4_post.php">
    Tên tác giả: <input name="author"><br>
    Tên sách: <input name="book"><br>
    Nhà xuất bản: <input name="publisher"><br>
    Năm xuất bản: <input name="year" type="number"><br>
    <button type="submit">Gửi</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      echo "<h3>Kết quả (POST):</h3>";
      echo "Tên sách: " . htmlspecialchars($_POST["book"]) . "<br>";
      echo "Tác giả: " . htmlspecialchars($_POST["author"]) . "<br>";
      echo "Nhà xuất bản: " . htmlspecialchars($_POST["publisher"]) . "<br>";
      echo "Năm xuất bản: " . htmlspecialchars($_POST["year"]);
  }
  ?>
</body>
</html>