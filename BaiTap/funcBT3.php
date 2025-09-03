<?php
function tong($a, $b) {
    return $a + $b;
}

function hieu($a, $b) {
    return $a - $b;
}

function tich($a, $b) {
    return $a * $b;
}

function thuong($a, $b) {
    return ($b != 0) ? $a / $b : "Không chia được cho 0";
}

function laNguyenTo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function laChan($n) {
    return $n % 2 == 0;
}
?>

