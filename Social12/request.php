<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main_statuspage.css" />
<?php
	require_once('auth.php');
?>
<?php
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");//requested is receiver
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			  echo'<div id="box" style="float:left;margin-left:-1px;">';
			  echo '<div>';
			  echo '<div style="float:left">';
			  echo '<div style="float:left">';
			  		echo ' <a href=profile.php?id='.$row1['id'] .' title="Click to Edit Profile Picture" id="one">'.'<img src="'.$row1['profilepic'].'" height="80" width="110"style="border:3px solid #000;></a>';
					echo '</div>';
					echo '<div style="float:right">';
					echo $row1['fname'].' '.$row1['lname'];
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right;">';	
					echo '<a rel="facebox" href=confirm.php?id='.$row3["id"] .'&amp;'.'requested_by_this_member='.$row3["addedby"].' title="Click to Confirm Request">'.'confirm'.'</a>';
					echo ' | ';
					echo '<a rel="facebox" href=deleterequest.php?id='.$row3["id"] .' title="Click to Delete Request">'.'not now'.'</a>';
					echo '</div><br><br><br><br><br><br>';
			   echo '</div>';
			   echo '<br><br>';
			   
								  }
								
								  }
								  
								  echo'</div>';
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="status.php">Back&larr;</a>