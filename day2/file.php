<?php
// user logs
$count =(int)file_get_contents("file.txt");
// 1-openfile
$f=fopen("file.txt","w");
// 2-write || read
fwrite($f,++$count);
// 3-close
fclose($f);
?>