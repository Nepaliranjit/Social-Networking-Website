<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">

<div id ="ranjit_space_box__for_adv" style=" font-family:'Courier New', Courier, monospace; size:2; color: #999900;overflow:scroll; height:300px; >
<div id="groupchat" style="overflow:scroll; height:600px; width:200px">
<?php
include'config.php';
include'auth.php';
?>
<?php
			 



	
                    $commentid=$_SESSION['SESS_MEMBER_ID'];								
								$result3 = mysql_query("SELECT * FROM comment   ORDER BY id DESC   ");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {  
								  $fff=$row3['content'];
								  $r=$row3['commentid'];
							       $rrr=$row3['id'];
				
					?>

  <?php 	
  $result4 = mysql_query("SELECT * FROM subcomment where subcommentid='$rrr'  order by id desc ");	
		
		 while($row4 = mysql_fetch_array($result4))
			 { 					
			echo '<div style="width: 250px; margin-left: 8px; padding: 4px; margin-top: 0px; background:#000; color:#000;  hover a:blue ;dispaly:block; margin-bottom: 2px;">';
			$fff=$row4['subcommentname'];
				$f=$row4['subcommentid'];
			    $c=	$row4['content'];
		        $post="Commented on the post of:";
					
			
			$result5 = mysql_query("SELECT * FROM members where id='$fff'"); 
			while($row5 = mysql_fetch_array($result5))
			{
		
			// $fname=$row6['fname'];
			
			
			
			
			
			echo '<img src="'.$row5['profilepic'].'" style="max-width: 30px; max-height: 20px; float:left;">';
			//echo '<div style="float: right; padding-top: 1px; padding-bottom: 1px; padding-right: 1px; width: 328px;">';
			
			echo '<label>';
			echo '<div id="name_ranjit" style="color: #0066FF;
><a style="text-decoration:none;background:url(photos/background.gif);
" href=profile.php?id='.$row3["commentid"] .'>'.$row5['fname'].' '.$row5['lname'].'<font color="red">Commentedon </font></a></div>'.'   &nbsp;&nbsp;&nbsp;'.print'<font color="#9ACD32"></font>';print '&nbsp;&nbsp;';
    
			echo '</label>';
			//echo '</div>';
		$result6 = mysql_query("SELECT * FROM comment where id='$f'"); 
		    while($row6 = mysql_fetch_array($result6))
		   {
		   $name=$row6['name'];//from comment table
						//echo $name;

			
			    
				$result7 = mysql_query("SELECT * FROM members where id='$name'"); 
			  while($row7 = mysql_fetch_array($result7))
			  {
			  $fname=$row7['fname'];
			  $lname=$row7['lname'];
			  ?>
			  <font color="#9ACD32" style="hover:backround:#fff;">
			  <?php  echo $fname.'&nbsp;'.$lname;?>&nbsp;Post</font>
			 <?php   print'<br>';?>
			 <center><font color="#FFFFFF" style="font-weight:bold; ">
			  <?php  echo $c;?></font></center>
			  <?php 
			  }
		
				
				
				
				 }
			//end of $result6
			
			
			echo '</div>';					
			
			}	
			
			
			  
			}
			  
			
			
			
			
			
			}
			?>
			</div>