<?php
$host="localhost";
$user="root";
$pass="";
$connect=mysql_connect($host, $user, $pass) or die(mysql_error());
$db=mysql_select_db("clean", $connect) or die(mysql_error());
if($db){
  mysql_query("SET charset 'utf8'") or die(mysql_error());
}
 ?>
