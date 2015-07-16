<?php

$base1 = mysql_connect('localhost', 'root', 'usbw', TRUE);
mysql_selectdb('expociencias', $base1); 
mysql_set_charset('utf8', $base1);

global $CFG;

$CFG['path'] = "localhost:8080/login.php";

?>
