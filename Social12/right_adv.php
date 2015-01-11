
<?php include'auth.php';
 ?>
<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<div id ="ranjit_right_box__for_adv">
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("fast");

  });
});
</script>
<style type="text/css">
.flip{


text-align:center;

cursor:pointer;
width:266px;
margin-right:80px;
height:15px;
margin-top:5px;
box-shadow:0px,0px,10px rgba(0,0,0,0.2);
background: #0099FF;
color: #CCCC00;
}
.flip:hover{
background:#0099FF;
color:#663300;
}
.panel
{
margin:0px auto;
padding:5px;
text-align:center;
background:#FFF;
width:300px;
height:500px;


}
.panel{
display:none;
}
</style>


<p class="flip"><a href="ut.php"><font color="#FFFFFF" style="text-decoration:none;">Chat Here</font></a><br /><br /><br />
<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "socialweb_ranjit.sql";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
//include'header_status.php';
//include'updates_in_chat.php';
   // $k="Hello";
	echo'<font color="#ccc"></font>';
	  function smileFace($text){
     $text=str_ireplace(":)","<img src='emotions/Ghelyon.gif'>",$text);
     $text=str_ireplace(":(","<img src='emotions/springsmile.gif'>",$text);
     $text=str_ireplace(":d","<img src='emotions/129fs916747.gif'>",$text);
	  $text=str_ireplace(":a","<img src='emotions/Banane21.gif'>",$text);
	    $text=str_ireplace(":b","<img src='emotions/bad_boys_20.gif'>",$text);
		 $text=str_ireplace(":s","<img src='emotions/sad.png'>",$text);
		  $text=str_ireplace(":c","<img src='emotions/wink.png'>",$text);
		  $text=str_ireplace(":f","<img src='emotions/ascii_art_fb.png'>",$text);
		  $text=str_ireplace(":l","<img src='emotions/emoticon-object-086.gif'>",$text);
		  
		   $text=str_ireplace(":g","<img src='emotions/smiley-dance013.gif'>",$text);
		    $text=str_ireplace(":h","<img src='emotions/smiley-computer004.gif'>",$text);
			 $text=str_ireplace(":i","<img src='emotions/64_27.png'>",$text);
			  $text=str_ireplace(":j","<img src='emotions/kiss.png'>",$text);
			
			   $text=str_ireplace(":k","<img src='emotions/64_22.png'>k",$text);
			
			   //filter bad words
			   
			    $text=str_ireplace("bad","****",$text);
				$text=str_ireplace("naughty","****",$text);
			
     return $text;
     
	
                }
?>
<?php //include 'auth.php'; ?>
  <?php 
   if(isset($_POST['submit'])){
    $name=$_POST['names'];
    $con=$_POST['content'];
	$sql=mysql_query("insert into chat(content,name)values('$con','$name')");
	   
     }
 ?>

<!--<div id="groupchat" style="overflow:scroll; height:600px; width:200px">
-->
	 <div id="dis">
   <?php 
   
     $sql2=mysql_query("select * from chat order by id desc limit 5");
     while($row=mysql_fetch_array($sql2)){
	  $message=$row['content'];
	  $sender=$row['name'];
	  // $dateTime= timeAgo($row['created']);

	  //echo $sender;
	 
   $sql3=mysql_query("select * from members where id='$sender'");
          while($rows=mysql_fetch_array($sql3)){
		  $fname=$rows['fname'];
		  $lname=$rows['lname'];
		
		   
              ?>
			 
		  
       <?php 
	   ?> 
	
		<?php 
		echo' <div id="chatbox"></div>';
		echo'<li>';
		//echo' <img src="'.$rows["profilepic"].'" height="40" weight="40" style="background:#fff;color:#fff;">';
		//  echo'<p style="color:#fff">'; echo $fname.'&nbsp;'.$lname;
		
		 
		echo'</p>';
	
	  		echo'</p>';
			//echo $dateTime ;
	  //echo'<p style="color:#fff">'; echo smileFace($message);
  echo'<hr>';echo'</li>';
	 
   }
   }
 
   
     ?>
	 <div id="notice" style="overflow:scroll; height:400px; margin-top:-300px; width:370px; ">
	 
	 <?php 
	 echo'Notification';
	 include_once'updates_in_chat.php';?>
	</div> 
	 </div><div id="boxdispaly" >
	<!-- <form action="ut.php" method="post">
<!--<input type="text" name="content"  width="250px; " height="50"/><br />
--><textarea name="content" cols="45" rows="5" required></textarea><br /><br />
<!--<input name="names" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
<input type="submit" name="submit" class="greenbutton1">
</form>--> 
<style>
#boxdispaly{
float:left;
margin-top:150px;
margin-left:300px;}

.greenbutton1{
	color:white;
	font-family:Palatino Linotype;
	background-color: #0066CC;
	border:2px solid white;
	font-weight:bold;
	 text-align: center;
    background-origin: padding-box;
    background-size: auto;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-style: solid;
    border-left-width: 1px;
    border-right-style: solid;
    border-right-width: 1px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-top-style: solid;
    border-top-width: 1px;
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 20px;
    font-style: normal;
    font-variant: normal;
    font-weight: bold;
    line-height: 23px;
    outline-color: rgb(255, 255, 255);
    outline-style: none;
    outline-width: 0px;
    text-decoration: none;
    text-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 0px;
    vertical-align: middle;
    padding: 15px 30px 15px 30px;
    zoom: 1;
    width: 180px;
	
	

}
.greenbutton1:hover{
 background: linear-gradient(#008aea, #024dcf);
    border-color: #0055a7;

}


</style>
<script>
$("#loader").show();
			$("#loader").fadeIn(400).html('<img src="loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading updates</span>');
		</script>	


	 </div></li>
  
	 <style type="text/css">

	 #chatbox{
	 float:right;
	 margin-right:2px;
	 margin-top:3px;
	 
	 }
	 #groupchat{
	 float:right;
	 margin-top:40px;
	 margin-right:350px;
	 width:400px;
	 height:200px;
	 
	 
	 }
	 #dis{
	 float:right;
	 margin-right:0px;
	 background:#fff;
	 width:270px;
	 height:350px;
	 
	 
	overflow:hidden;border:solid #8CACDD;font-family:Arial, Helvetica, sans-serif;font-size:11px; float:right; border-width:0 0 1px 1px;
	 
	 
	  color: #CCCC00; padding:0;list-style:none; margin:0; padding-left:1px;
	  
	  }
	  

  
	  
	  #dis li:hover{
	  background: #0066CC;
	  color:#FF0000;
	  }
	 
#loader{font-size:12px;display:none; margin:0 auto; width:112px; height:20px; padding:10px;}






	 </style>
	 <div id="slider" style=" margin-top:-30px;">
	 
	 jj
	 kj
	 l
	 </div>

</p>


<div class="panel" style="margin-top:-30px;">
<img src="ketaharu/1085847_1847007950_173846397_q.jpg"  style="margin-left:161px; margin-top:10px; margin-right:110px;"  /><font  color="#996600" size="2">Rupak Nepal</font><br>
Voli colz aune<b>?:</b><font color="#FF0000"><br />30m</font>
<img src="ketaharu/274630_100001719820363_1413326162_q.jpg"  style="margin-left:161px; margin-top:10px;margin-right:95px;"  /><font  color="#996600" size="2">Sam Maharajan</font><br>
Ma ta aaudina!!!<b>:</b><font color="#FF0000">20m</font>
<img src="ketaharu/1118247_100000093465156_1952022755_q.jpg"  style="margin-left:161px; margin-top:10px;margin-right:75px;"  /><font  color="#996600" size="2">Binaya shrestha</font><br>
Done!Done!!Done!!!<b>:</b><font color="#FF0000">10m</font>
<img src="ketaharu/1118695_100000702644504_1683430572_q.jpg"  style="margin-left:161px; margin-top:10px;margin-right:65px;"  /><font  color="#996600" size="2">Pratik kharel</font><br>
Ma pani na aune!<b>:</b><font color="#FF0000">5m</font>
<img src="ketaharu/1119344_100000572404940_1108373344_q.jpg"  style="margin-left:161px; margin-top:10px;margin-right:65px;"  /><font  color="#996600" size="2">Kushwal Shrestha</font><br>
Khoi k garne yar!taha xaina!!<b>:</b><font color="#FF0000">3m</font>
<img src="ketaharu/187396_1035469574_904842843_q.jpg"  style="margin-left:161px; margin-top:10px;margin-right:75px;"  /><font  color="#996600" size="2">Avijeet Karna</font><br>
<img src="emotions/bad_boys_20.gif" style="width:20px" height="15px;">Sab keta haru na aaune voli college!natra VODI!<b>:</b><font color="#FF0000">2s</font>
</div>
</div>
<font  color="#006666" size="2"><b>Say hello to friends...&nbsp;&nbsp;&nbsp;</b></font><br /><br /><br /><center>  <br /></center>

</div>


<?php  
include_once'config.php';   
?>