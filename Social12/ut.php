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
include'header_status.php';
include'updates_in_chat.php';
    $k="Hello";
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
<?php include_once 'time.php';    ?>

  <?php 
   if(isset($_POST['submit'])){
    $name=$_POST['names'];
    $con=$_POST['content'];

	$time=time();
	$sql=mysql_query("insert into chat(content,name,created)values('$con','$name','$time')");
	   
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
	  $dateTime= timeAgo($row['created']);

	  //echo $sender;
	 
   $sql3=mysql_query("select * from members where id='$sender'");
          while($rows=mysql_fetch_array($sql3)){
		  $fname=$rows['fname'];
		  $lname=$rows['lname'];
		 $adminVerified=$row3['id'];
								
		   
              ?>
			 
		  
       <?php 
	   ?> 
	
		<?php 
		echo' <div id="chatbox"></div>';
		echo'<li>';
		
			//if($adminVerified==6){
		  //echo'<font color="blue" style="margin-left:300px; font-weight:bold;">Verified Profile</font>';
			  
		echo' <img src="'.$rows["profilepic"].'" height="40" weight="40" >';

		  echo'<p style="color:#fff">'; echo $fname.'&nbsp;'.$lname;
		
		 
		echo'</p>';
	
	  echo'<p style="color:#fff">'; echo smileFace($message);
	  echo'&nbsp;';
	print'<font color="yellow">'; echo $dateTime;print'</font>';
	  		echo'</p>';
			
  echo'<hr>';echo'</li>';
	// }else{
	 
	 //echo' <img src="'.$rows["profilepic"].'" height="40" weight="40" style="background:#fff;color:#fff;">';
		 // echo'<p style="color:#fff">'; echo $fname.'&nbsp;'.$lname;
		
		 
		//echo'</p>';
	
	 // echo'<p style="color:#fff">'; echo smileFace($message);
	 // echo'&nbsp;';
	 //echo $dateTime;
	  	//	echo'</p>';
			
 // echo'<hr>';echo'</li>';
	 
	 
	// }
   }
   }
   
   
     ?></div><div id="boxdispaly">
	 <form action="ut.php" method="post">
<!--<input type="text" name="content"  width="250px; " height="50"/><br />
--><textarea name="content" cols="45" rows="5" required></textarea><br /><br />
<input name="names" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
<input type="submit" name="submit" class="greenbutton1">
</form> 
<style>
#boxdispaly{
float:left;
margin-top:150px;
margin-left:450px;}

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
	 width:400px;}
	 #dis{
	 float:right;
	 margin-right:0px;
	 background: #006699;
	 
	 
	 
	 width:250px; height:638px; overflow:hidden;border:solid #8CACDD;font-family:Arial, Helvetica, sans-serif;font-size:11px; float:right; border-width:0 0 1px 1px;
	 
	 
	  color:#fff; padding:0;list-style:none; margin:0; padding-left:1px;
	  
	  }
	  

  
	  
	  #dis li:hover{
	  background:#CCCCCC;
	  color:#FF0000;
	  }
	 
#loader{font-size:12px;display:none; margin:0 auto; width:112px; height:20px; padding:10px;}






	 </style>
	 
