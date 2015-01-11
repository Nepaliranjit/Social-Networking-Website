<?php
	require_once('auth.php');
?>
<?php
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			  
			  echo '<div>';
			  echo '<div style="float:left">';
			  echo '<div style="float:left">';
			  		echo '<img src="'.$row1['profilepic'].'" height="30" width="30">';
					echo '</div>';
					echo '<div style="float:right">';
					echo '<a style="text-decoration:none" href=profile.php?id='.$row1["id"] .'>'.$row1['fname'].' '.$row1['lname'].'</a>';
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right">';	
					
					echo '<a rel="facebox" href=deleterequest.php?id='.$row3["id"] .' title="Click to Delete Request">'.'delete'.'</a>';
					echo '</div>';
			   echo '</div>';
			   echo '<br><br>';
								  }
								  }
				?>