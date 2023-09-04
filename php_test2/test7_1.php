<?php
$sum = 0;
$n = $_POST['num'];

for ($i=1; $i <= $n; $i++) {
    $sum += $_POST['num'.$i];
}

echo $sum;

?>