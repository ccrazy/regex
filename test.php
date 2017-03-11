<?php
$patten = array("/\d/","/[a-z]/","/[1a]/");
$repalce = array("a","b","c");
$subject = array("1","a","3","wd","5","a2");

$r = preg_filter($patten,$repalce,$subject);

print_r($r);
