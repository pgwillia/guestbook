<?php
$file = fopen($filename, 'r') or die('unable to open file');
$guestbook = fread($file, filesize($filename)); 
fclose($file);
?>
