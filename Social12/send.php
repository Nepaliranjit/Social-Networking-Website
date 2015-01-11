<?php

//I HAVE REMOVE PHOTOS AND VIDEO SEND OPTION
session_start();
include('config.php');
$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$senddate= date("l,jS F Y,g:i:s:a");
$url=$_POST['url'];
$nombrefoto=$_FILES['foto']['name'];
$ruta=$_FILES['foto']['tmp_name'];
$destino =  "fotos/".$nombrefoto;
copy($ruta,$destino);
$status='unread';
//varchar no enum
//special character fix
//this function allows user to send message characters like ?,/,#,$,%,& etc.
function filterFunction($var){
$var=nl2br(htmlspecialchars($var));
$var=eregi_replace("'","&#39;",($var));

$var=eregi_replace("'","$#39;",($var));
return $var;
}

$content=filterFunction($content);

//url to clickable link

$content = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank">\\1</a>',$content);
$content = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank">\\2</a>', $content);
$content = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a href="mailto:\\1">\\1</a>', $content);





if(empty($content)){
echo"empty field";
 header("location: status.php");
 }else{
$sql=mysql_query("INSERT INTO messages(sender, receiver, content, status,created,image,url)VALUES('$from', '$to', '$content', '$status','$senddate','$destino','$url')");
 header("location: status.php");
mysql_close($con);
}
?>