<?php
$evenCount = 0;
$oddCount = 0;

for ($i = 1; $i <= 10; $i++) {
    if ($_POST['num'.$i] % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}
echo "짝수의 갯수 : ".$evenCount."<br>";
echo "홀수의 갯수 : ".$oddCount;
?>