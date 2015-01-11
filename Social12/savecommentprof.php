<?php
session_start();
include('config.php');
$to=$_POST['to'];
$content=htmlentities($_POST['content']);
$from=$_POST['from'];
$time=time();
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 


mysql_query("INSERT INTO comment(commentid, content, name, pakadtoan, created)VALUES('$to', '$content', '$from', '$to', '$time')");
header("location: profile.php?id=$to");
mysql_close($con);
?>