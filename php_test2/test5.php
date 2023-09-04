<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];

$start;
$end;

if ($n1 > $n2) {
    $start = $n2;
    $end = $n1;
}else { 
    $start = $n1;
    $end = $n2;
} 
for ($i=$start; $i <= $end; $i++) {
    echo $i."<br>";
}
?>