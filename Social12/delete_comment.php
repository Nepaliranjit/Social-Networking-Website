<?php
include('config.php');
//$a=$_GET['id'];
mysql_query("DELETE FROM comment WHERE id='".$_SESSION['SESS_MEMBER_ID']."'");
header ("location: status.php");
mysql_close($con);
?>