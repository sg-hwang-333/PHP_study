<?php 
$arr = array("apple","banana","grape");

$arr2 = range(1,10);
$arr2 = range(1,10,2);

// 배열 길이 확인용 : sizeof($arr) 또는 count($arr)
for ($i = 0; $i < count($arr); $i++ ) {
    echo $arr[$i]."<br/>";
}

$arr[0] = "tom";
$arr[1] = "kyu";
$arr[2] = "miky";

// for문보다 실무에서 더 많이 사용
// $arr배열에 있는 원소를 하나씩 빼내서 $item에 집어넣음
foreach ($arr as $item) {
    echo $item."<br/>";
}

?>