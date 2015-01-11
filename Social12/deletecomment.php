<?php
include('config.php');
//$a=$_GET['id'];
mysql_query("DELETE FROM comment WHERE 	id= '".$_GET['id']."'" );
header ("location: status.php");
mysql_close($con);
?>