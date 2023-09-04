<?php 
$labels = $_POST['labels'];

for ($i=2; $i<=9; $i++) {
    echo $labels." X ".$i." = ".$i*$labels."<br>";
}
?>