<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="btnstyle.css">
<link rel="stylesheet" href="css/.css">
 <link href="admin/css/bootstrap.css" rel="stylesheet">
 <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">



<?php error_reporting(0); ?>
<?php include'header_status.php'; ?>
<?php include'right_friends_add.php';?>
<?php include'time_in_ago.php';?>
<?php  //include'right_adv.php';  ?>
<?php  //include'slideup.php';  ?>
<?php //include'zebra.php';?>
<?php include_once 'smileys.php';    ?>
<?php include_once 'youtube_video_fetch.php';    ?>

<?php
	require_once('auth.php');
?>
<br>
<?php //include_once'left_menu.php';?>
  <div id="pic">
  <?php 
			   include('config.php');			
					$commentid=$_SESSION['SESS_MEMBER_ID'];
								
				$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
				while($row3 = mysql_fetch_array($result3))
				
								  { 
					if(empty($row3['profilepic'])){
					echo ' <a href=editpic.php?id='.$row3['id'] .' title="Click to Edit Profile Picture" id="one">'.'<img src="photos/avatar.png" style="border-width: 1px; margin-top:-70px;">'.'</a>';
					print"<div id='name' style='margin-top:-13px;'><b><font color='blue'> <br>"; echo $row3["fname"].'&nbsp;'.$row3["lname"]; print"</b></font></div>";  
								  
					}else{
								  
			  	echo ' <a href=editpic.php?id='.$row3['id'] .' title="Click to Edit Profile Picture" id="one">'.'<img src="'.$row3['profilepic'].'" height="110" width="100" style="border-width: 0px; margin-top:-70px;float:left;
border :1px solid #ccc;
background:#ccc;
padding:1px;
margin:0.7em;

background:-moz-linear-gradients(top,#666/#333);
background:-webkit-gradient(linear,left top,left bottom,from(#666),to(#333));

-moz-border-radius:2px;
-webkit-border-radius:2px;

">'.'</a>';
		print"<div id='name' style='margin-top:-13px;margin-left:-40px;'><i><font color='blue'> <br>"; echo $row3["fname"].'&nbsp;'.$row3["lname"]; print"</i></font></div>";  
								  
				}
				}?>
				
    
	
	

			  </div>
	  
	  
	  
	  
		
     <div class="content">
	 <!--SLIDE DOWN TEXTAREA BOX -->
	     <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs
/jquery/1.7.1/jquery.min.js"></script>-->
    <script src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js" ></script>
 <script type="text/javascript" src="jquery_1.5.2.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>SocialWeb</title>
        <script type="text/javascript">
            $(function(){
            $("#content").focus(function(){
            $(this).animate({"height": "75px",}, "slow" );
            $("#button_hide").slideDown("fast");
			$(".ranjit_image").hide("fast");
            return false;
            });
             
            $("#cancel").click(function(){
            $("#content").animate({"height": "30px",}, "slow" );
            $("#button_hide").slideUp("fast");
			$(".ranjit_image").show("fast");

            return false;
            });
			 $("#fur").click(function(){
          
            $(this).animate({"height": "75px",}, "slow" );
            $("#button_hide").slideDown("fast");
            return false;
            });
            });
        </script>
        <script>
		 function reg()
{
	
		
	if(document.com.content.value=="")
	{
		alert("Please write something");
		document.com.content.focus();
		document.com.content.select();
		return false;
	}
		else
		{
		return true;
		}	
}
</script>
		
    <form action="savecomment.php" method="post" name="com" onSubmit="return reg()">
	<input name="from" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
	<input name="to" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
	<input name="pakadtoan" type="hidden" value="<?php  echo $_SESSION['SESS_MEMBER_ID']; ?>">			
 	<!--FOR SIMLEY--><div id="display_message">
			 	</div>
<textarea name="content" id ="content" placeholder="say something" style="margin-left: 4px;margin-top: 150px; width:95%; border:1px solid #006699;"required >             </textarea><br><p class="ranjit_image" style=" margin-top:0px;margin-right:150px;">Upload photo</p>
		<br><br><br><br><br><br>
	<div id="button_hide">

		<input type="text" name="url" size="500" data-location="right" data-trigger="focus" placeholder="Enter youtube video url eg:https://www.youtube.com/watch?v=nCrQ1A2BEZ0"style="width: 550px;height:30px; margin-top:-100px;margin-left:60px;"><select name="privacy">
		<option value="">Select your</option>
		<option value="nocomment">Donot show comment</option>
		</select>
		<br>



<img src="assets/smileys/springsmile.gif" class="button" smiley=':spr:' style="cursor:pointer;"/>
<img src="assets/smileys/lol.gif" class="button" smiley=":00" style="cursor:pointer;"/>
<img src="assets/smileys/kiss.gif" class="button" smiley=":kiss:" style="cursor:pointer;"/>
<br>
<img src="assets/smileys/jealous.gif" class="button" smiley=':j:' style="cursor:pointer;"/>
<img src="assets/smileys/emoticon-object-086.gif" class="button" smiley=":e" style="cursor:pointer;"/>
<img src="assets/smileys/64_22.png" class="button" smiley=":s:" style="cursor:pointer;"/>
<script src="appsimley/simley/jquery_1.5.2.js"></script>
<script src="index.js"></script>
<script src="appsimley/simley/jquery-1.8.1.min.js"></script>

<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
</script>

 
	     <input type="submit"  id="button" value="Comment" style="cursor:pointer;style="width:100px;" onclick="$('#loading').show();"/>
         <input type="submit" id="cancel" value="Cancel" style="cursor:pointer; " />
		 <br /><br /><br /><br><hr>		  
		m</div>  <div id="loading" style="display:none;"><img src="photos/ajax-loader (1).gif" alt="" /><b></b></div>
		 </form>
		<form action="postphoto.php" method="post" enctype="multipart/form-data">
		<input name="from" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
		<input name="to" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
		<div class="ranjit_choose" style="margin-top:-50px; "> 
		<textarea name="comment" id ="comment"  cols="80" rows="3" placeholder="Write something about photo"style="    margin-top:-80px;width:600px;margin-left:-300px;"  required  > </textarea> <br>
			<input type="submit" value="Upload" style="margin-left:-100px;margin-top:0px;padding-top;10px;" >
            <input type="file" name="image" required style="padding:5px; margin-top:-50px; id="button2">&nbsp;&nbsp;
			<p class="ranjit_image" style="margin-top:0px;margin-right:150px;">close it</p>
					</div>
					</form>
			   <style>
			   hr
			   {
   /*border: solid 1px #B4BBCD;*/
	background-color:#FFFFFF;
	z-index:1;
	border-top:none; margin-top:0px;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
	background: #fff;
}
        </style>
   
    <script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$(".ranjit_image").click(function(){
    $(".ranjit_choose").slideToggle("slow");
	
  });
});
</script>

<style type="text/css">
img {
    opacity:1.0 ;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

img:hover {
    opacity: 0.4;
    filter: alpha(opacity=100); /* For IE8 and earlier */
	
}

.ranjit_image{


text-align:center;

cursor:pointer;
margin-top:10px;


}
.ranjit_image:hover{
text-decoration:underline;
color:#663300;
}
.ranjit_choose
{
margin:0px auto;
padding:5px;
text-align:center;
background:#fff;

width:20px;
height:20px;

}
.ranjit_choose{
display:none;
}
</style>


				
 <style type="text/css">
.pic{
	width:50px;
	height:50px;
}
.picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
	
}
.pic:hover + .picbig{
	width:200px;
	border:1px solid orange;
	
}

.bg :hover  {
border:1px solid #0000ff;
}
</style>

   
  
	  
<?php
			   include('config.php');


$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
	
       $commentid=$_SESSION['SESS_MEMBER_ID'];								
		$result3 = mysql_query("SELECT * FROM comment   ORDER BY id DESC   ");
								
								
		while($row3 = mysql_fetch_array($result3))
		 {  
		 $fff=$row3['content'];
		 $url=$row3['url'];
		 $comment= $row3["comment"];
	     $f=parse_smileys($fff);
		 $commentid=$row3['commentid'];
		 $view_total=$row3['views'];

 
        echo '<div id="Layer4">';
	    $qwerty=$row3['name'];	
	    $time=$row3['created'];	
	    $ppppp=$row3['postcat'];  
	


        $result4 = mysql_query("SELECT * FROM members where id='$qwerty'");
								
								
		while($row4 = mysql_fetch_array($result4))
		 { 
		$id=$row3['id'];
		$name=$row4['fname'].' '.$row4['lname'];
	echo '</div>';
 	echo'<div id="time_ago_right"><br>&nbsp;&nbsp;';
	//	$time = time_stamp($time);
		echo '</div>';
			   
    $dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
	
	       #CHECK CONDITION IF POST IS ONLY PHOTO(IE:photo plus description)  OR ONLY TEXT                 
	if($ppppp!='photos')
		{
		
		//url to clickable link
		 $fff = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank">\\1</a>', $fff);
         $fff = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank">\\2</a>',  $fff);
          $fff = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a href="mailto:\\1">\\1</a>',  $fff);
					   
		
		
   //  function smileFace($text){
     //$text=str_replace(":)","<img src='emotions/Ghelyon.gif'>",$text);
     //$text=str_replace(":(","<img src='emotions/springsmile.gif'>",$text);
     //$text=str_replace(":d","<img src='emotions/129fs916747.gif'>",$text);
    // return $text;
   	//}
  //  echo smileFace($fff);
  
  //$added="Express fellings like this:";

			echo '<div id="box2"><img  class="pic" src="'.$row4['profilepic'].'" style="max-width: 80px";><img  class="picbig" src="'.$row4['profilepic'].'"style="		height:100px;
float:left;margin-left:-285px;margin-top:-105px;
" >  <div id="text_left"><div id="txt"><a style="text-decoration:none" href=profile.php?id='.$row3["commentid"] .'><strong><font color="#0099FF"; >'.$name.'</font>&nbsp;&nbsp;</strong></a>	</div></div> <p><font size="2" color="#"><div id="content"><div style="width: 499px; margin-left:50px; padding: 4px; margin-top:0px; border-width: 0px 0px 0px 0px; border-style: solid; border-color: #ccc; "><BR><BR>    '.$f.'<div style="width: 289px; margin-top: -6px; margin-left: 53px; padding-bottom: 0px;"></div></div></div></div></font></p>
  </form><br>';
  ?>
  <font color="#CCCCCC" style="float:left; margin-top:-22px;">
		<?php  echo $time = time_stamp($time);echo'|';
		$rrr=$row3['id'];
		$result = mysql_query("SELECT * FROM subcomment where subcommentid='$rrr' ");
     	$numberOfRows = MYSQL_NUMROWS($result);	//total text comment
		$result9 = mysql_query("SELECT * FROM photocomment where commentid='$rrr'  order by id desc ");	
		$tot=mysql_num_rows($result9);//total photo comment
       
	 
      $total=$tot+$numberOfRows;
	  if($total>0){
	echo  $total;print '&nbsp;comment'; 
}else{echo"No Comment";}
		
		?>
		</font>
		<div id="video" style=" float:left;margin-left:-5px;">
	  <?php if(!empty($row3['url'])) { ?>
		  <iframe width="500" height="300"  src="http://www.youtube.com/embed/<?php echo get_youtubeid($row3['url']);?>" frameborder="0" allowfullscreen></iframe><?php } ?>  <br>
		<br>
		</div>
		<style>
		#video{
		margin-left:-200px;
		
		
		</style>
		
		<?php 
		 
		
	echo'</form>';
		
	  
	
		}
		
	
		
		if($ppppp=='photos')
		{
		
$comment = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '<a href="\\1" target="_blank">\\1</a>',$comment);
$comment = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i',
                       '\\1<a href="http://\\2" target="_blank">\\2</a>', $comment);
$comment = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i',
                       '<a href="mailto:\\1">\\1</a>', $comment);
		$added="added a new  photo";
					   
		echo '<div id="ranjit_photo_pic"><img class="pic"src="'.$row4['profilepic'].'" style="max-width: 50px;max-height: 40px;margin-top:-7px"><img  class="picbig" src="'.$row4['profilepic'].'"style="		height:100px;
float:left;margin-top:-105px;
" >
</div><div style="width: 387px; margin-left: 8px; padding: 0px; margin-top: 0px; border-width: 0px 0px 0px 0px; border-style: solid; border-color: #e6e6e6;"><div id="txt"><a style="text-decoration:none; float:left;"  href=profile.php?id='.$row3["commentid"] .'>   
<strong><font color="#0099FF"; >'.$name.'</font></strong>
</a>&nbsp; <font color="#ccc">'.$added.'</font>	</div><br><font color="#000;font-size:29px;">'; echo $comment;
echo'</font>';	


		
		echo '<br><br><br>	<br><br><br><br><br><br><br><a href=zoom.php?id='.$row3['id'].' title="Click to enlarge image"><img class="bg"src="'.$row3["content"].'" style="max-weight:400px;max-height:400px; margin-left:10px;border:0px dotted #0066FF; padding: 0px; margin-top: -100px;"><a></p>';
	
	    echo'<font color=#ccc>';
$time = time_stamp($time);print'|'; if ($view_total>0){ print  $view_total;print '&nbsp;Views';print'|';}else{echo"No views";print'|';}
$rrr=$row3['id'];
	
$result = mysql_query("SELECT * FROM subcomment where subcommentid='$rrr' ");
     	$numberOfRows = MYSQL_NUMROWS($result);	//total text comment
		$result9 = mysql_query("SELECT * FROM photocomment where commentid='$rrr'  order by id desc ");	
		$tot=mysql_num_rows($result9);//total photo comment
  
	 
      $total=$tot+$numberOfRows;
	echo  $total;print '&nbsp;comment'; 

echo'</font><br><br>';//break after time and comment
		echo '</div>';
}		
		
		$rrr=$row3['id'];
	
	
		
	  }	
	
	
	
	
	  	echo'<div id="subcomment">';
		
		//echo '<div style="width: 385px; margin-left: 8px; padding: 4px; margin-top: 0px; background-color:#ccc; margin-bottom: 2px; font-family: '.'Lucida Grande'.', Tahoma, Verdana, Arial, sans-serif;box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
	background:#fff; font-size: 11px; color: #ccc" font-weight:bold;>'."You 205 other likes".''; 
//storing autoincrement id in one variable	
  echo'
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

$rrr=$row3['id'];
		?>
 <?php 
		$result4 = mysql_query("SELECT * FROM subcomment where subcommentid='$rrr'  order by id desc ");	
		
		 while($row4 = mysql_fetch_array($result4))
			 { 					
			echo '<div style="width: 385px; margin-left: 8px; padding: 4px; margin-top: 0px; background-color:#fff; color:#000;  margin-bottom: 2px;">';
			$fff=$row4['subcommentname'];
			$content=$row4['content'];
			$for_simley_in_out=parse_smileys($content);
		   $timezone = date_default_timezone_get('Asia/Kathmandu');
		  // $date = $row4['time'];
		   $date= timeAgo($row4['time']);
		
			$result5 = mysql_query("SELECT * FROM members where id='$fff'"); 
			while($row5 = mysql_fetch_array($result5))
			{
			//$time=$row5['time'];
			echo '<img src="'.$row5['profilepic'].'" style="max-width: 60px; max-height: 30px; float:left; ">';
			//echo '<div style="float: right; padding-top: 1px; padding-bottom: 1px; padding-right: 1px; width: 328px;">';
			echo '<label>';
			echo '<div id="name_ranjit" style="color: #0066FF;font-weight:bold;
><a style="text-decoration:none;background:url(photos/background.gif);
" href=profile.php?id='.$row3["commentid"] .'>'.$row5['fname'].' '.$row5['lname'].'&nbsp; |&nbsp;<font color="#ccc" >';echo $date ;   echo'&nbsp;</font></a></div>'.' <div id="dd"style="list-style: none;
	padding: 5px;
	margin-left:40px;
	background:#f5f5f5;
	color:#222;
	font-weight:bold;
	margin-bottom: 5px;
	border-radius: 5px 40px 5px;
	
border-right:60px;
	width: 352px;
	font-family: arial;
	font-size: 13px;
	
}">  '.$for_simley_in_out;
echo'</div>';
			echo '</label>';
			//echo '</div>';
			}
			echo '</div>';					
			}	
			
			
			
			//select photoomment from photocomment table according to id of uploaded post
			$result9 = mysql_query("SELECT * FROM photocomment where commentid='$rrr'  order by id desc ");	
		
		 while($row9 = mysql_fetch_array($result9))
			 { $comment=$row9['comment'];
			 $commentby=$row9['person'];					
			
			$result10 = mysql_query("SELECT * FROM members where id=' $commentby'");
			while($row10=mysql_fetch_array($result10)){
			  $fname=$row10['fname'];
			  $lname=$row10['lname'];
			  
			$fullname=$fname.$lname;
			   echo '<img src="'.$row10['profilepic'].'" style="max-width: 30px; max-height: 30px; float:left;background-color:#ccc;">';
			   ?>
		<span style="float:left; color:#0033FF;">
		      <?php print'<p>'; echo $fname. '&nbsp;'.$lname;?><?php print'</p>'; ?><?php echo'<br>';?><?php print'&nbsp;&nbsp;&nbsp;';?><?php echo '<font color="#000">';echo $comment;?><?php echo'</font>';?><?php echo'<br>';?>
			  		  <?php    echo '<img src="'.$row9['image'].'" style="max-width: 140px; max-height: 150px; float:center;">&nbsp;';?>
 <?php echo '<br><br>'?>
		</span>
			   <?php 
			   }
			   }	
	?>	
	
							
		<script type="text/javascript" src="viewajax.php"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     
<?php 
		$commentinon="Comment on&nbsp;";
		$post="post";
		$finaloutput=$commentinon.$name.'&nbsp;'.$post;
		
		echo '<div style="width: 385px; margin-left: 8px; padding: 4px; margin-top: 0px; background-color:#fff">';
		
		//start like


		
		
		
		
		
	
		
		//end like
		
		if (empty($row3['privacy'])){
		echo '<form action="subcomment.php" method="post" style="margin-bottom: 2px;">';
		
		
		echo '<input name="commentid" id="commentid"type="hidden" value="'.$row3['id'].'">';
		echo '<input name="subcommentname" id="subcommentnames" type="hidden" value="'.$_SESSION['SESS_MEMBER_ID'].'">';
		echo'<table id="tbl_triggers">';
		echo'<td style="vertical-align: middle;">';
			 			
				
								
			 
			
		echo '&nbsp;&nbsp;<input name="subcommentcontent"id="subcommentcontents" type="text" data-title="'.$finaloutput .'" data-location="right" data-trigger="focus" placeholder="write comment...."style="width: 370px;height:30px; margin-left: 0px; ">';
		echo'</td>';
		 echo'</table>';
		 
		// echo'<button id="inserts">Insert</button>';
		// echo'<div id="result"></div>';  
   //  echo'<input type="submit" id="show" value="view result">';

		echo'<a href=photo_subcomment_form.php?id='.$row3['id'].' title="Browse a unquie photo">photo</a>';
	

		
	}else{
	echo'<img src="photos/padlock.png"style="width:30px; height:30px;"><font color="red" style="font-family:arial;font-weight:bold;">NO COMMENT AVAILABLE FOR THE POST!</font>';
     }			
			
			
			
		
		
		
		
		echo '</form>';	
		
		echo '</div>';
		echo '<div style="padding-top: 0px;"></div>';
echo '</div><hr><br>';

	  
}

?>	

          
<!--Bottom to top slide starts here-->



	<a href="#" title="Scroll To Top" class="top"></a>

<style type="text/css">



.top {
height:50px;
width:50px;
text-decoration: none;
position:fixed;
top:550px;
right:40px;
display:none;
background-image:url(to-top.png);
background-repeat:no-repeat;
}
.top:hover {
border:3px #CC6600 solid;
text-decoration:none;
}



</style>



</style>

		
         


  
   
   
   
    <script src="jquery-1.8.1.min.js"></script>
    <script type="text/javascript"> 
	$(document).ready(function(){
	
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.top').fadeIn();
		} else {
			$('.top').fadeOut();
		}
	});
	

	$('.top').click(function(){
		$('html, body').animate({scrollTop : 0},1500);
		return false;
	});
	
	
	
});

    
    </script>

<!--Bottom to top slide ends here-->
  </script>

<!--Tootltip ie:COMMENT ON POST-->
    <script src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js" ></script>
	<script type="text/javascript">
        $("#tbl_locations a").LiteTooltip({ textalign: 'left', trigger: 'hover' });
        $("#tbl_triggers a").LiteTooltip({ textalign: 'left' });
        $("#tbl_triggers input").LiteTooltip({ textalign: 'left' });        
    </script>
	


<?PHP include'fotter.php';?>





