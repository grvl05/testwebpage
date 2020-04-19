<?php
  AddHandler application/x-httpd-php .php5 .php4 .php .php3 .php2 .phtml
  AddType application/x-httpd-php .php5 .php4 .php .php3 .php2 .phtml
  AddType application/x-httpd-php-source .phps
  AddHandler php5-script .php

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
