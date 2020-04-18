<?php
$filename="test.txt";
$file=fopen($filename,"w");
if($file==false)
{
echo "Eroor";
exit();
}
fwrite($file,"Hello World");
fclose($file);
?>