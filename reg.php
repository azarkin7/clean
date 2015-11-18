<meta content="text/html; charset=UTF-8">
<?php
header("Content-Type: text/html; charset=utf8");
include "config.php";
$login=$_POST['login'];
$fam=$_POST['fam'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$date=$_POST['date'];
$passport=$_POST['passport'];
$index=$_POST['index'];
$country=$_POST['country'];
$region=$_POST['region'];
$city=$_POST['city'];
$street=$_POST['street'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$skype=$_POST['skype'];
$social=$_POST['social'];
$ref=$_POST['ref'];
$refid=$_POST['referal'];
mysql_query("SET charset 'utf8'") or die(mysql_error());
$query=mysql_query("INSERT INTO `user` (`login`,`fam`,`name`,`surname`,`date`,`passport`,`index`,`country`,`region`,`city`,`street`,
`mail`,`mobile`,`skype`,`social`,`ref`, `referalid`) VALUES ('$login', '$fam', '$name', '$surname','$date','$passport','$index','$country','$region',
'$city','$street','$mail','$mobile','$skype','$social','$ref', '$refid'); ") or die(mysql_error());



?>
