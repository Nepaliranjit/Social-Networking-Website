<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<link rel="stylesheet" href="css/.css"><body>


<div id="header">

<div id="left"  style="color:#fff; margin-left:100px; font:Arial, Helvetica, sans-serif; font-size:20px; margin-top:-5px; cursor:pointer;">
SocialWeb&nbsp;&nbsp;
			
			  <?php //include'zebra.php';  ?>
		
</div
></div>

<div id="right">
<!--<a href="status.php" style="font-family:Arial, Helvetica, sans-serif; text-decoration:none; "></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="friends.php">friends</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="members.php">Members</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">Logout</a>
-->
</div>

</div> <div id="divLine"></div>
<div id="wrapper"><!--<img src="photos/student.jpg" width="800" height="300" title="click here to change cover page" alt="">
  --><?php 
			   include('config.php');			
					
								
								$result3 = mysql_query("SELECT * FROM members where id='".$_SESSION['SESS_MEMBER_ID']."'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { ?>
			           <?php /*?> if(empty($row3['coverphoto'])){
						echo'<font color="blue" style="float:right;margin-top:100px;"><font color="red" style="font-weight:bold;">Hello,'.$row3['fname'].'
						</font><br>You have no coverphoto at<br> the moment. Browse a unique cover photo.</font>';
						}<?php */?>
			 <?php  
			  		echo '<a href=editcover.php?id='.$row3["id"] .' title="BROWSE A UNIQUE COVER PHOTO">'.'<img src="'.$row3['coverphoto'].'" height="250px"width="800px"  style="border-bottom: 3px solid orange">'.'</a>';
								  
								if(empty($row3['coverphoto'])){
						echo'<font color="blue" style="float:right;margin-top:-80px;"><font color="red" style="font-weight:bold;">Hello,'.$row3['fname'].'!
						</font><br>You have no coverphoto at<br> the Moment. Browse a unique cover photo.</font>';
						}
								
								
								
								 }
				?>
			
</div>

<div class="clear">
</div>

</body>
<style type="text/css">
b{
color:#FF9933;
}
#line{
margin-top:12px;

color:red;
width:100%;
}
</style>

