<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main_statuspage.css" />
<?php 

include_once'left_menu.php'; ?>
<?php
	//require_once('auth.php');
?>

 

			  	
     <div id="friends">
			  
<?php 
                //Select all members except you ie:logged in member
             $result3 = mysql_query("select * from members where id!='".$_SESSION['SESS_MEMBER_ID'] ."'order by id desc limit 3" );
				
												
				while($row3 = mysql_fetch_array($result3))
					
                  {
				  $name=$row3['fname'];
				  $id=$row3['id'];
				  ?>
	<li id="<?php echo $row3['id'];?>">
     <?php 
	echo '<hr><div id="rightpic">  <br><a href=mesages.php?id='.$row3["id"] .' title="Click to Send Message"><br>  '.'<center> <li class="image"> <img src="'.$row3['profilepic'].'" height="100" width="100" style="border-top: 0px; 
border-radius:15px;-moz-border-radius:5px;-webkit-border-radius:5px;-webkit-border-radius:15px;border:1px solid #ccc;background:-moz-linear-gradients(top,#666/#333);background:-webkit-gradient(linear,left top,left bottom,from(#666),to(#333));
"></li> Name:'.$name.'<br>Last Login:</center>'.'</a></hr></div> '.'<a href=sendrequest.php?id='.$row3["id"] .' onclick=alert("friendRequestSEND!!!")   title="Click to Send friend request">Send friend request<br><a href=mesages.php?id='.$row3["id"].' title="Send Message">Send PM<br></a>.';
	
}
//<a href=sendrequest.php?id='.$row3["id"] .'
		?>
</div>