<?php
$myfile = fopen("log.txt", "w") or die("Unable to open file!");

$txt = $_SERVER['REMOTE_ADDR'];
fwrite($myfile, $txt);
fclose($myfile);
?> 