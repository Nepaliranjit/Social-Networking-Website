<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main_statuspage.css" />
<?php
	require_once('auth.php');
?> 

<div id="box">
<?php
echo'<center>';
echo '<form action="send.php" method="post" enctype="multipart/form-data">';
echo '<input name="to" type="hidden" value="'.$_GET['id'].'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
echo '<textarea name="content" cols="60" rows="4" required></textarea>'.'<br>';
//echo'<input type="file" name="foto" id="foto" value="browse"><br>';
//echo'<input type="text" name="url" size="35px"><br>';
echo '<input name="send"  type="submit"  value="Send" style="padding:10px;width:140 ; cursor:pointer;">';
echo '</form>';
echo'</center>';
?>
</div>