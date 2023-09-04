<?php 
 $filename="data2.txt";
 $content = "Tom had a white dog";
 $fp = fopen($filename,"w");
 fputs($fp,$content);
 fclose($fp);
 echo "File Saved!";

?>

<?php 
 $filename="data2.txt";
 $content = "Jane had a red dog";
 $fp = fopen($filename,"w");
 fwrite($fp,$content);
 fclose($fp);
 echo "File Saved!";

?>

<?php 
 $filename="data2.txt";
 $content = "Mike had a red dog";
 file_put_contents($filename,$content);
 echo "File Saved!";

?>