<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main_statuspage.css" />

<?php //include_once'left_menu.php'; ?>
<?php
	require_once('auth.php');
?>
<?php  include'header.php'; ?>
 
  <div id="Layer1">
	             <?php
				 
				 
 			   include('config.php');			
					$commentid=$_SESSION['SESS_MEMBER_ID'];
								
				$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
				while($row3 = mysql_fetch_array($result3))
				
		{		  
								  
			  	echo '<a href=editpic.php?id='.$row3["id"] .' title="Click to Edit Profile Picture">'.'<img src="'.$row3['profilepic'].'" height="124" width="160" style="border: 0px ">'.'</a>';
								  
								  }
				?>
  </div>
			  	
     <div id="friends">
			  
       <?php
	  include('config.php');
    $result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY receiver ASC");
	 $numberOfRows = MYSQL_NUMROWS($result);	
	 
 echo '<div id="ranjit_small_box"><font size="2" color="red">  </font>'; 
 echo'<a  href="messages.php">(<b>' . $numberOfRows . '</b>)<img src="photos/templatemo_contact_hover.png" border="0"></a></div>';

                //Select all members except you ie:logged in member
             $result3 = mysql_query("SELECT * FROM members where id!='".$_SESSION['SESS_MEMBER_ID'] ."' " );
				
												
				while($row3 = mysql_fetch_array($result3))
					
                  {
				  $name=$row3['fname'];
				  $id=$row3['id'];
				  
				
                        include('config.php');			
				
						
						 
		             	
		             	echo '<hr><div id="rightpic">  <br><a href=mesages.php?id='.$row3["id"] .' title="Click to Send Message"><br>  '.'<center> <li class="image"> <img src="'.$row3['profilepic'].'" height="100" width="100" style="border-top: 0px; 
border-radius:15px;-moz-border-radius:5px;-webkit-border-radius:5px;-webkit-border-radius:15px;border:1px solid #ccc;background:-moz-linear-gradients(top,#666/#333);background:-webkit-gradient(linear,left top,left bottom,from(#666),to(#333));
"></li> Name:'.$name.'<br></center>'.'</a></hr></div> '.'
<a href=sendrequest.php?id='.$row3["id"] .' onclick=alert("friendRequestSEND!!!")   title="Click to Send friend request">Send friend request<br>
<a href=mesages.php?id='.$row3["id"].' title="Send Message">Send PM<br></a>.';

}



      

		?>
</div>










</head>


</body>
</html>
<?php  include'fotter2.php'?>