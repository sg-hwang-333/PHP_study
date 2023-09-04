<?php
$n = $_POST['num'];
$sum = 0;
$count = 0;

for ($i=100; $i < 1000; $i++) {
    if ($i % $n == 0) {
        $sum += $i;
        $count++;
    }
}

echo $n."의 배수의 갯수 : ".$count."<br>";
echo $n."의 배수의 합계 : ".$sum;
?>