<?php
$n = $_POST['num'];

for ($i=1; $i <=100; $i++) {
    if ($i % $n == 0) {
        echo $i."<br>";
    }
}
?>