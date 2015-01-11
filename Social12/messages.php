<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/btnstyle.css" />

<style type="text/css">
body{
background:url(photos/background.gif);
}
</style>

<?php
	require_once('auth.php');
	include_once'header.php';
?>

<?php
			   include('config.php');			
				
								//receiving message
								$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ");
								
								while($row3 = mysql_fetch_array($result))
								  {
								
								  $qwe=$row3['sender'];
								
							
								  
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			
			
			echo '<div id="box"><a style="text-decoration:none" href=profile.php?id='.$row1["id"] .'> '.'<img src="'.$row1['profilepic'].'"  title="'.$row1['fname'].' '.$row1['lname'].'" style="padding-left:10px; padding-bottom: 10px; max-width: 180px" height="100px" ><br>From:<strong>'.$row1['fname'].' '.$row1['lname'].'</strong> <br>'.$row3['created'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a   href="#"> <li></li> <a id="submitButton" href=readmessage.php?id='.$row3["id"] .' class="progress-button" title="Click to read the Message" >Read Message</a>  
     </div></div></a>';
	
		
			  
			
			  }
						
							  }
							  
							  
				?>	
					