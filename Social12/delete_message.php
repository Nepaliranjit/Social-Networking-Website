<?php
include'auth.php';
?>
<?php
include'config.php';

$commentid=$_GET['id'];
 $sql_delete_msg=mysql_query("delete  from messages where id='$commentid'");
 header("Location:messages.php");
 
 
 
 ?>