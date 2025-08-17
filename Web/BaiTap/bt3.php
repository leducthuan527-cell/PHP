<?php
require "funcBT3.php";

$a = 10;
$b = 5;

echo "Tổng: " . tong($a, $b) . "<br>";
echo "Hiệu: " . hieu($a, $b) . "<br>";
echo "Tích: " . tich($a, $b) . "<br>";
echo "Thương: " . thuong($a, $b) . "<br>";

$n = 17;
echo "$n " . (laNguyenTo($n) ? "là số nguyên tố" : "không phải số nguyên tố") . "<br>";
echo "$n " . (laChan($n) ? "là số chẵn" : "là số lẻ") . "<br>";
?>
