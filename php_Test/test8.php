<h2><font color="red">

<?php 
 $filename="visit.txt";
 $fp = fopen($filename,"r");

  $i = 0;
  while(!feof($fp)) {
    $i = $i.fgets($fp);
  }
  
 $content = $i+1;
 file_put_contents($filename,$content);
 echo "당신은 ".$content."번째 방문자입니다";

 fclose($fp);
?>

</h2></font>