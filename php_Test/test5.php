<?php
$str = "PHP";
echo strlen($str);
?>

<hr>

<?php
$var1 = "hello";
$var2 = "Hello";

$result = strcmp($var1,$var2);

echo "result = ".$result;
?>

<hr>

<?php
$str = "abcdefgd";
$find = "d";
$pos = strpos($str,$find);

echo $pos;
?>

<hr>

<?php
$str = "hellophpwelcome";
$result = substr($str,5,3);
echo $result."<br>";

$result2 = substr($str, 3);
echo $result2;
?>

<hr>

<?php
$str = "Marry Had A Little Lamb and She LOVED It So Much";

echo strtoupper($str)."<br>";
echo strtolower($str);
?>

<hr>

<?php
$pizza = "piece1/piece2/piece3/piece4/piece5";
$arr=explode("/", $pizza);


foreach($arr as $val) {
    echo $val."<br>";
}
?>

<hr>

<?php
$arr = array("kim","lee","kyo","park","hwang");
$str = implode(" ", $arr);

echo $str;
?>