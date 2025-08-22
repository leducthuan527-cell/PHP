<?php
session_start();

$error = "";
$first_name = $last_name = $email = $invoice_id = $additional_info = "";
$receiptPath = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name      = trim($_POST["first_name"] ?? "");
    $last_name       = trim($_POST["last_name"] ?? "");
    $email           = trim($_POST["email"] ?? "");
    $invoice_id      = trim($_POST["invoice_id"] ?? "");
    $additional_info = trim($_POST["additional_info"] ?? "");
    $options         = $_POST["options"] ?? [];

    if (empty($first_name) || empty($last_name) || empty($email) || empty($invoice_id)) {
        $error = "Vui lòng nhập đầy đủ thông tin.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ.";
    }

    if (!empty($_FILES["receipt"]["name"])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);

        $targetFile = $targetDir . basename($_FILES["receipt"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (in_array($fileType, ["jpg", "jpeg", "png"])) {
            if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $targetFile)) {
                $receiptPath = $targetFile;
            } else {
                $error = "Lỗi khi upload file.";
            }
        } else {
            $error = "Chỉ cho phép file JPG, PNG.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bai tap 5</title>
</head>
<body>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) : ?>
    <h3>Thông tin bạn đã nhập:</h3>
    <p><b>First Name:</b> <?= htmlspecialchars($first_name) ?></p>
    <p><b>Last Name:</b> <?= htmlspecialchars($last_name) ?></p>
    <p><b>Email:</b> <?= htmlspecialchars($email) ?></p>
    <p><b>Invoice ID:</b> <?= htmlspecialchars($invoice_id) ?></p>
    <p><b>Additional Info:</b> <?= htmlspecialchars($additional_info) ?></p>
    <p><b>Dịch vụ đã chọn:</b> <?= !empty($options) ? implode(", ", $options) : "Không chọn" ?></p>
    <?php if (!empty($receiptPath)) : ?>
        <p><b>Receipt:</b> <img src="<?= $receiptPath ?>" alt="Receipt" style="max-width:200px;"></p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>




