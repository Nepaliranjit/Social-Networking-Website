<?php
	require_once('auth.php');
?>
 <?php
			   include('config.php');	
			   		$qqq=$_SESSION['SESS_MEMBER_ID'];		
					$commentid=$_GET['id'];//this bar address comes from lol.php line 61 sendrequest.php?id='.$row3["id"] .' 
					$rrt='pending';
				
		

		
				
mysql_query("INSERT INTO friends(addedby, requested, status)VALUES('$qqq', '$commentid', '$rrt')");

header("location: status.php");
mysql_close($con);

?>
