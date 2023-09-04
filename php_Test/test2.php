<?php 
// 1. 1부터 10까지 합 구해서 출력
$sum = 0;

for ($i = 1; $i <= 10; $i++ ) {
    $sum += $i;
}
echo $sum;
echo "<br>";

// 2. 1부터 100까지 짝수의 합 구해서 출력
$sum2 = 0;
for ($i = 1; $i <= 100; $i++ ) {
    if ($i % 2 == 0) {
        $sum2 += $i;
    }
}
echo $sum2;
echo "<br>";

// 3. 2단부터 5단까지 구구단 출력
$sum3 = 0; 
for ($i = 2; $i <=5; $i++) {
    for ($j = 2; $j <= 9; $j++) {
        echo $i." * ".$j." = ".($i * $j);
        echo "<br>";
    }
    echo "<br>";
}

// 4. 10,30, 50의 합과 평균을 구하시오
$sum4 = 10 + 30 + 50;
echo $sum4;
echo "<br>";
echo $sum4 / 3;
echo "<br>";

// 5. score=78 일때, A,B,C,D,F 출력
$score = 78;
if ($score >= 90) {
    echo "A";
} else if ($score >= 80) {
    echo "B";
} else if ($score >= 70) {
    echo "C";
} else if ($score >= 60) {
    echo "D";
} else {
    echo "F";
}
echo "<br>";

// 6. $num=7 일때, 짝수인지 홀수인지 판별하여 출력
$num = 7;
if ($num / 2 == 0) {
    echo "짝수입니다";
} else {
    echo "홀수입니다";
}
echo "<br>";

// 7. $a = 5, $b = 7일때 $op='/'
$a=5; 
$b=7;
$op = '*';

switch($op) {
    case '+': echo $a+$b; break;
    case '-': echo $a-$b; break;
    case '*': echo $a*$b; break;
    case '/': echo $a/$b; break;
}

?>