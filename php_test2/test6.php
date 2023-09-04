<?php
$n = $_POST['num'];
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    if ($i % 5 == 0) {
        $sum += $i;
    }
}
echo "1 부터 ".$n."까지의 5의 배수의 합 : ".$sum;
?>