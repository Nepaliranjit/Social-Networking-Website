<?php

	  include('config.php');
	  //include('auth.php');
    
echo md5('sirgina');
?>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>

<script>

$(document).ready(function(){
	
	$('li').click(function(){
		
		$('li').removeClass('active');
		
		$(this).addClass('active');
		
	});

	
});
</script>

<style>




#bottom-bar {position: fixed;bottom: 0;left: 0;right: 0;height: 45px;z-index: 1000;
}

#main-nav-wrapper {position: absolute;width: 100%;height: 45px;bottom: 0;visibility: visible;background: white;
-moz-box-shadow: 0 -1px 0 rgba(0,0,0,0.11);-webkit-box-shadow: 0 -1px 0 rgba(0,0,0,0.11);box-shadow: 0 -1px 0 rgba(0,0,0,0.11);z-index: 120;}

#main-navigation {list-style: none;margin: 0;padding: 0;}

#main-navigation li.active {height: 49px;}

#main-navigation li {position: relative;display: block;height: 45px;width: 52px;float: left;border-right: 1px solid #ededed;}

#main-navigation li:hover span{display:block;}

#main-navigation li.profile a {background-position: -106px 0;}

#main-navigation li.profile.active a {background-position: -52px 0;}

#main-navigation li.active a {background: url(photos/profile_50.png) #fe544a;}

#main-navigation li.blog a {background-position: -212px 0 ;}
#main-navigation li.blog a{background: url(photos/forum_icon.png) #000;}
/*#main-navigation li.blog.active a {background-position: -158px 0;}
*/
#main-navigation a {width: 100%;height: 100%;display: block;background: url(main-nav.png) black;text-indent: -9999px;
position: relative;outline: none;cursor: pointer;}

#main-navigation li.twitter a {background-position: -318px 0;}

#main-navigation li.twitter a {background: url(photos/myspace...png) #000;}

#main-navigation li.tumblr-likes a {background-position: -424px 0;}

#main-navigation li.tumblr-likes.active a {background-position: -370px 0;}

#main-navigation li.ask a {background-position: -530px 0;}

#main-navigation li.ask.active a {background-position: -476px 0;}

#main-navigation li.submit a {background-position: -636px 0;}

#main-navigation li.submit.active a {background-position: -582px 0;}

#main-navigation li.flickr a {background-position: -742px 0;}

#main-navigation li.flickr.active a {background-position: -688px 0;}

#main-navigation li a > span {text-indent: 0;position: absolute;bottom: 55px;color: #fff;font-weight: 700;font-size: 12px;text-align: center;display: none;background: #000;background: rgba(0,0,0,0.8);-webkit-border-radius: 5px;
-moz-border-radius: 5px;border-radius: 5px;padding: 7px 14px;left: 50%;white-space: nowrap;}


#main-navigation li a > span:after {content: url(main-nav-arrow.png);position: absolute;left: 50%;bottom: -8px;
margin-left: -15px;}



</style>

		 
<div id="bottom-bar">

			 
			 
<div id="main-nav-wrapper">
<ul id="main-navigation">
            
            
<li class="profile active">
<a href="members.php ">


<span style="margin-left: -32.5px;  ">Members</span></a>
</li>

<li class="blog">
<a href="messages.php"><span style="margin-left: -56.5px; height:20px;  display:block;margin-bottom:40px;"> You have<?php 
    $query = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY receiver ASC");
	$totlMessage=mysql_num_rows($query);
	if($totlMessage<1)	{
	echo"No Message";
}else{	 
  ?>
  <font color="#FF0000"  style="font-weight:bold;">
  <?php 
echo  $totlMessage;print'</font>';print '&nbsp;Message';
  ?>
 


<div id="boll" class="bounce" style=" margin-top:100px;"><img src="m.png"></div>



<?php 
 
 
 
}
 ?></span></a>
</li>

<li class="twitter">
<a href="friends.php"><span style="margin-left: -56.5px;">You have<?php 
$query2 = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
	
 $totalfriends=mysql_num_rows($query2);
	?>
	 <font color="#FF0000" style="font-weight:bold;">
	 <?php 
	echo  $totalfriends;print'</font>';print '&nbsp;Friends';


?>

</span></a>
</li>

<li class="tumblr-likes">
<a href="privacy.php"><span style="margin-left: -29.5px;">Privacy</span></a>
</li>

<li class="ask">
<a href="index.php"><span style="margin-left: -61px;">Logout</span></a>
</li>
<li class="submit">
<a href="ut.php"><span style="margin-left: -34px;">chat</span></a>
</li>

<li class="submit">
<a href="mero_profile.php"><span style="margin-left: -34px;">Profile</span></a>
</li>


<li class="flickr"> <?php //include'shout.php'; ?> 
<a href="status.php"><span style="margin-left: -29.5px;">Home </span></a>

</li>
  
  
  
  
  
</ul>
<!--<div id="shout" style="margin-left:800px; height:45px; margin-top:0px; background:#0099FF"> <?php //include'shout.php' ?> </div>
--></div>

</div>











<style>


#boll{
	width:100px;
	height:100px;
	background-color: #0066FF;
	margin:0 auto;
	margin-top:255px;
	margin-left:20px;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100%;

}

.bounce{-webkit-animation:bounce 8s ease-in-out infinite}

@-webkit-keyframes bounce {

0% {
	-webkit-transform:translateY(-200px);
}
5% {
  	-webkit-transform:translateY(0px);
}
15% {
	-webkit-transform:translateY(-170px);
}
30% {  
    -webkit-transform:translateY(0px);  
} 
40% {
  	-webkit-transform:translateY(-140px);
}
50% {  
    -webkit-transform:translateY(0);  
} 
60% {
	-webkit-transform:translateY(-110px);
}
70% {
	-webkit-transform:translateY(0%);
}
80% {
	-webkit-transform:translateY(-50px);
}
90% {
	-webkit-transform:translateY(0);
}

95% {
	-webkit-transform:translateY(-10px);
}

100% {
	-webkit-transform:translateY(0);
}



/**/


</style>
 