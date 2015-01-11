	 <?php
		 
 include_once'config.php';
 include_once'auth.php';
            $commentid=$_SESSION['SESS_MEMBER_ID'];     
 
$result4 = mysql_query("SELECT * FROM members where id='  $commentid'");
								
								
								while($row4 = mysql_fetch_array($result4))
								  { 
			  
			  
			  		echo '<img src="'.$row4['profilepic'].'" style="max-width: 50px";background:#999999;
color:#006666;
cursor:pointer; title="You";>';
					$qwqwqw=$row4['fname'].' '.$row4['lname'];
					}			  
								
			 ?>