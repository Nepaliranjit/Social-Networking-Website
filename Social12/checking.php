<?php

include("config.php");


if(isSet($_POST['email']))

{

$email = $_POST['email'];



$sql_check = mysql_query("select id from members where email='".$email."'") or die(mysql_error());



if(mysql_num_rows($sql_check))

{

echo '<font color="red" style="margin-left:105px;"><STRONG>'.$email.'</STRONG> is not available.</font>';

}

else

{

echo 'OK';

}



}



?>