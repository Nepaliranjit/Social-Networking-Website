<?php
$message=$_POST['content'];
$message=str_replace(':)','<img src=simley/download.jpg',$message);
$message=str_replace(':(','<img src=simley/download(1).jpg',$message);
$message=str_replace(':oo','<img src=simley/smiley-bounce016.gif',$message);
echo $message;




?>