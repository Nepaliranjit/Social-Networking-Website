
<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<link rel="stylesheet" href="css/.css">

		  
       <?php
	  include('config.php');
	//require_once('auth.php');
            //select message count only  from receiver row ie: for loggedin member
  //  $result = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY pakadtoan ASC");
	// $numberOfRows = MYSQL_NUMROWS($result);	
	 

 ?>

	

<div class="nav">
 
<div id="header">


  
			   
<div id="left"  style="color:#fff; margin-left:100px; font:Arial, Helvetica, sans-serif; font-size:20px; margin-top:-5px; cursor:pointer;">
SocialWeb&nbsp;&nbsp;
			
			  <?php //include'zebra.php';  ?>
		
</div>  <input type="text" class="search" id="searchid" placeholder="Search for people by Name or Email:" style="float:left; margin-top:-100xp;margin-left:200px" />

<div id="result"></div>

<div id="right">

  <?php //include'zebra.php';  ?>
 
</div>

</div> <div id="divLine"></div>


<div class="clear">
</div>tttttttttttttttttttt
<style>
body{
height:1000px;
}
</style>