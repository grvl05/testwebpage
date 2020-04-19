<?php
  $POST['login'];
  echo $login


  $filename="pass.txt";
  $file=fopen($filename,"w");
  if($file==false)
  {
  echo "Eroor";
  exit();
  }
  fwrite($file,"111222333yesssssssss");
  fclose($file);
?>
