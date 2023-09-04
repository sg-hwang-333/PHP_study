<?php
$n = $_POST['num'];

for ($i=0; $i < $n; $i++) {
    echo "<form method='post' action='test7_1.php'>
     <input type='text' name='num".$i."' size='1'>"."<br>";
}
echo "<button type='submit'>입력완료</button>
</form>"

?>