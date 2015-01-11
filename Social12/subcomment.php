<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
session_start();
include('config.php');
$commentid=$_POST['commentid'];
$subcommentname=$_POST['subcommentname'];
$subcommentcontent=$_POST['subcommentcontent'];

//$time= date("Y-m-d H:i:s");
$time=time();

           
function filterFunction($var){
$var=nl2br(htmlspecialchars($var));
$var=eregi_replace("'","&#39;",($var));

$var=eregi_replace("'","$#39;",($var));
return $var;
}

$subcommentcontent=filterFunction($subcommentcontent);

//url to clickable link
$subcommentcontent = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank">\\1</a>',$subcommentcontent);
$subcommentcontent = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank">\\2</a>', $subcommentcontent);
$subcommentcontent = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a href="mailto:\\1">\\1</a>', $subcommentcontent);



$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
					   
//end of link

 if(empty($subcommentcontent)){
 header("location: status.php");
 echo'Write Something';
 }else{
		   
		   
mysql_query("INSERT INTO subcomment(subcommentid, subcommentname, content,time)VALUES('$commentid', '$subcommentname', '$subcommentcontent','$time')");
header("location: status.php");
mysql_close($con);
}
?>
