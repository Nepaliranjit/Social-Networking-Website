 <?php
			   include('config.php');			
					$commentid=$_GET['id'];
					mysql_query("DELETE FROM friends WHERE id='$commentid'");
								header("location:friends.php");
mysql_close($con);
?>