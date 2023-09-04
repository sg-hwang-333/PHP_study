<?php
  // 1. data.txt 파일을 읽기 모드로 열어서 fp에 대입한다
  $fp = fopen("data.txt","r");

  // 2. 한 글자씩 읽어와서 출력하기
  while(!feof($fp)) {
       // eof가 아닐 때까지 반복해라
    echo fgetc($fp);
  }

  // 3. 파일 닫기
  fclose($fp);
?>

<hr>

<?php 

  // fgets로 출력
  $fp = fopen("data.txt","r");

  while(!feof($fp)) {
    echo fgets($fp);
  }
  fclose($fp);

?>

<hr>

<?php 

  $filename = "data.txt";
  $fp = fopen($filename,"r");

  $contents = fread($fp, filesize($filename));

  echo "fread : ".$contents;

?>

<hr>

<?php 
$filename = "data.txt";
echo file_get_contents($filename);
?>

