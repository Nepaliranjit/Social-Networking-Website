<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/btnstyle.css" />

<?php
	include('auth.php');
?>
   <?php include('youtube_video_fetch.php');?>
 <?php
			   include('config.php');		
			   
			   
			   	
					$commentid=$_GET['id'];
					$rrt='unread';
					$update=mysql_query("UPDATE messages SET status='$rrt' WHERE id='$commentid'");
					    
						?>
						<?php 			
								
			

				
								
						$result3 = mysql_query("SELECT * FROM messages where id='$commentid' order by id desc");								
								
								while($row3 = mysql_fetch_array($result3)){
								
							
								
								
								$comment= $row3['content'];
								// $a=$row3['image'];
					
							
		               $to=$row3['sender'];
		 
		              $sql=mysql_query("select * from members where id='$to'");
		              while($row=mysql_fetch_array($sql)){
		 
		 echo'<div id="message_box">';
			
					echo'<font color="red"><center><div id="date">'. $row3['created'].'</div>';echo'<hr></center></font>';
						  	echo'<img src="'.$row["profilepic"].'" height="50" weight="50" style="border:3px solid #000;"><br>';
							echo '<font color="Black">'.  $row["fname"] .'&nbsp;'.$row["lname"].'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;';
		}
				echo'<p> '.$comment.'</p>';
					//echo'<img src="'.$row3["image"].'" height="400" width="385">';
				//	if(!empty($row3['image'])){
					//echo'<img src="'.$row3["image"].'" height="400" width="385">';
					//}
					?>
						<?php /*?>  <?php if(!empty($row3['url'])) { ?>
		  <iframe width="400" height="385" src="http://www.youtube.com/embed/<?php echo get_youtubeid($row3['url']);?>" frameborder="0" allowfullscreen></iframe><?php } ?><br><?php */?>
		
	
	
						  
			<div id="center">		 
	   <a id="generateButton"  href="delete_message.php?id=<?php echo $row3["id"];?>  " onclick="return confirm('Are you sure you want to delete?')"   class="progress-button red">Delete!!!</span></a> 
	   
	 
	  
		 <?php 
//onclick="return confirm('Are you sure you want to delete?')" 
 }		?>					  

<input name="senddate" type="hidden" id="sender" value="<?php echo date("l,jS F Y,g:i:s:a"); ?>"/></td>
<div id="message_box">
  <?php 
// nl2br
 echo'<center>';
echo '<form action="send.php" method="post">';
echo '<input name="to" type="hidden" value="'.$to.'">';
echo '<input name="from" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
echo '<textarea name="content" cols="60" rows="4"></textarea>'.'<br>';
echo '<input name="send" type="submit" value="Reply Message"  style="  cursor: pointer; padding:10px;" >';
echo '</form>';
echo'</center>';
?></div>

<style type="text/css">
#click-off{
background:#000000;
color:#009900;
}
#center{
margin-left:-280px;
</style>