<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js_TICKER/jquery.min.js"></script>
<script type="text/javascript" src="js_TICKER/jquery.vticker-min.js"></script>
<script type="text/javascript">
$(function(){
	$('#news').vTicker({ 
		speed: 500,
		pause: 5000,
		animation: 'fade', 
		mousePause: true,
		showItems: 1
	});
});
</script>
</head>

<body>
<div class="container" id="news">
  <ul>
    <li class="news-head" style="margin-top:0px;">
     <?php include'config.php';?>
    
	<?php 
	$check_shouts = mysql_query("select * from `news` order by rand() ");
if(mysql_num_rows($check_shouts) < 1) 
{
	echo '<div class="info">There is no item in the database table to display at the moment.</div>';
}
else 
{
	?>
  
    <?php
	while($get_shouts = mysql_fetch_array($check_shouts)) 
	{
	      $SocialWeb_members_id_news_table=$get_shouts['memberid'];
		?>
		 <li>
		 <?php echo strip_tags($get_shouts["content"]);?>
		
		 </a>
		
		<?php 
		$sql_select_members=mysql_query("select * from members where id = '$SocialWeb_members_id_news_table'");
		 while($rows=mysql_fetch_array($sql_select_members)){
		  $ranjitMember_fname=$rows['fname'];
		  $ranjitMember_lname=$rows['lname'];
		
		   echo'<font color="darkred" style="margin-top:-5px;  margin-left:60px;font-weight="bold";">';
		  echo $ranjitMember_fname;print'&nbsp;'; echo $ranjitMember_lname;print'&nbsp;'; 
		  echo'</font>';
		
		  echo'<font color="blue" style="margin-left:65px;margin-top:10px; color:#fff;">';
		echo strip_tags($get_shouts["content"]);
		  echo'</font>';echo'&nbsp;&nbsp;&nbsp;';
		  
		// echo'<img src="'.$rows["profilepic"].'" height="40" ; weight="50" style=" margin-left:5px;float:left;">';
		
		  
		}
		}
		?>
		<?php
	}
	?> 
	
	</li> 
    </ul>
    </div>
   </div>
	
	
	
	
    </li>
   <style>
   #name img{
 

   }
   #backColor:hover{

   }
   
   </style>