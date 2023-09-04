<?php
$sum = 0;
$count = 0;

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];


if ($n1 > $n2) { 
    $start = $n2;
    $end = $n1;
} else { 
    $start = $n1;
    $end = $n2;
}
for ($i = $start; $i <= $end; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $sum += $i;
        $count++;
    }
}
$avr = $sum / $count;
echo "합 : ".$sum."<br>";
echo "평균 : ".$avr;
?>