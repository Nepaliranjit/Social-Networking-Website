
<?php
include_once'auth.php';
?>

   <?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
$commentid=$_POST['commentid'];
$content=$_POST['content'];

mysql_query("INSERT INTO post(commentid,  content)VALUES('$commentid', '$content' )");
header("location: status.php");
mysql_close($con);
}
?>