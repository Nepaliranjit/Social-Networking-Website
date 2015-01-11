<link rel="stylesheet" href="style.css" />
<?php
session_start();
include('config.php');
$to=$_POST['to'];//commentid of poster
$content=($_POST['content']);
$url=$_POST['url'];
$from=$_POST['from'];//poster
$poster=$_POST['poster'];
$privacy=$_POST['privacy'];
$time=time();

 
?>


<?php

	
function filterFunction($var){
//$var=nl2br(htmlspecialchars($var));//remove this to comment in nepali  language
$var=eregi_replace("'","&#39;",($var));

$var=eregi_replace("'","$#39;",($var));
return $var;
}

$content=filterFunction($content);


$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);


//url to clickable link

$content = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank">\\1</a>',$content);
$content = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank">\\2</a>', $content);
$content = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a href="mailto:\\1">\\1</a>', $content);
					  
//end of link

	  


 if(!empty($content)){

 


mysql_query("INSERT INTO comment(commentid, content, name, poster, created,url,privacy)VALUES('$to', '$content', '$from', '$poster', '$time','$url','$privacy')");
header("location: status.php");
mysql_close($con);
}else {
echo'field empty';
}
?>

