<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/btnstyle.css">
<style type="text/css">
body{
background:url(photos/background.gif);

}
</style>
<?php //include_once'left_menu.php';?>
<?php
	require_once('auth.php');
?>
<?php include_once'header.php';?>

  <div id="ranjit_small_box1">	  <a rel="facebox" href="request.php">	<img src="photos/myspace.png" border="0"></a>
      
<?php
	include('config.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="2"color="red">(<b>' . $numberOfRows . '</b>)</font>'; 
	?>	
	
 
     
       <?php
	      //count total friends
						include('config.php');
						$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
						$numberOfRows = MYSQL_NUMROWS($result);	
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2" color="white">Total friends</font>(<b>' . $numberOfRows . '</b>)'; 
		?>
    </div>

    <?php
			   include('config.php');			
				
							//fetch all your friends	
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			  
									  
											echo '<div id="box"><div id="right_ranjit_friends"><a style="text-decoration:none" href=profile.php?id='.$row1["id"] .'> <li class="image"> '.'<img src="'.$row1['profilepic'].'"  title="'.$row1['fname'].' '.$row1['lname'].'" style="padding-left:10px; padding-bottom: 10px; max-width: 180px" height="100px" ></li></div>Full Name:<strong>'.$row1['fname'].'&nbsp;&nbsp;'.$row1['lname'].'</strong><br>address:<strong>'.$row1['address'].'</strong><br>Contact:<strong>'.$row1['contact'].'</strong><br>Gender:&nbsp;&nbsp;<strong>'.$row1['gender'].'</strong><br>Birthday:<strong>'.$row1['bday'].'</strong><br>Works as:<strong>'.$row1['work'].'</strong><br>Email-id:<strong>'.$row1['email'].'</strong><a id="actionButton" href="deleterequest.php?id='.$row3['id'].'   " class="progress-btn green " data-loading="Working.." data-finished="Finished!"title="Un-friend" data-type="background-bar">Remove this friend!</a></div></a>';	
											
											
								
						  }
								  }
				
?>
 