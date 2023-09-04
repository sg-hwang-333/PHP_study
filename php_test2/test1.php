<?php
$evenSum = 0;
$oddSum = 0;

for ($i = 1; $i <= 5; $i++) {
    if ($_POST['get_'.$i] % 2 == 0) {
        $evenSum += $_POST['get_'.$i];
    } else {
        $oddSum += $_POST['get_'.$i];
    }
}

echo "짝수의 합 = ".$evenSum."<br>";
echo "홀수의 합 = ".$oddSum;


?>