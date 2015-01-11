<?php
	include('config.php');//require_once('auth.php');
?>
<form action="ut2.php" method="post">
<input name="from" type="hidden" value="<?php //echo $_SESSION['SESS_MEMBER_ID']; ?>"><!--comment from logged in user-->
<input name="to" type="hidden" value="<?php // echo $_SESSION['SESS_MEMBER_ID']; ?>"><!-- to all logged in user -->
<input name="pakadtoan" type="hidden" value="<?php // echo $_SESSION['SESS_MEMBER_ID']; ?>">			
    

			
<textarea name="content" id ="content"  rows="4" cols="44"  > </textarea><br>
<input type="submit" name="submit">
</form>

<?php
//session_start();

$to=$_POST['to'];
$content=htmlentities($_POST['content']);
$from=$_POST['from'];
$pakadtoan=$_POST['pakadtoan'];
//$time=time();

mysql_query("INSERT INTO chat2(commentid, content, name, pakadtoan)VALUES('$to', '$content', '$from', '$pakadtoan')");

?>



