<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<?php
include "config.php";



if(isset($_POST["last_loaded_id"]) && !empty($_POST["last_loaded_id"]))
{
	$result4 = mysql_query("select * from  subcomment where id > '".mysql_real_escape_string(strip_tags($_POST['last_loaded_id']))."' order by id desc limit 5 ");
	
	

	 
			
			while($row4 = mysql_fetch_array($result4))
			 { 					
			echo '<div style="width: 385px; margin-left: 8px; padding: 4px; margin-top: 0px; background-color:#ccc; color:#000;  hover a:blue ;dispaly:block; margin-bottom: 2px;">';
			$fff=$row4['subcommentname'];
		
			$result5 = mysql_query("SELECT * FROM members where id='$fff'"); 
			while($row5 = mysql_fetch_array($result5))
			{
			echo '<img src="'.$row5['profilepic'].'" style="max-width: 30px; max-height: 20px; float:left;">';
			//echo '<div style="float: right; padding-top: 1px; padding-bottom: 1px; padding-right: 1px; width: 328px;">';
			echo '<label>';
			echo '<div id="name_ranjit" style="color: #0066FF;><a style="text-decoration:none" href=profile.php?id='.$row3["commentid"] .'>'.$row5['fname'].' '.$row5['lname'].'</a></div>'.'   '.$row4['content'];
			echo '</label>';
			//echo '</div>';
			}
			echo '</div>';					
			}					
		
		
		echo '<div style="width: 385px; margin-left: 8px; padding: 4px; margin-top: 0px; background-color: rgb(237, 239, 244);">';
		echo '<form action="subcomment.php" method="post" style="margin-bottom: 2px;">';
		}
		?>