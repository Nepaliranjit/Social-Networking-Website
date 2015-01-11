<?php
			 /*?>  include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id']."' and status='accepted' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			                  //echo'<div id="friend"style="width:200px;">';
			        echo'<div id="details1">';
								echo'<p>';  
										echo '<a style="text-decoration:none;
margin-top:400px;margin-left:30px;cellspacing:1px;" href=profile.php?id='.$row1["id"] .'>'.'<img src="'.$row1['profilepic'].'" title="'.$row1['fname'].' '.$row1['lname'].'" style=" max-width: 100px"></a>';
											//echo'</br></br>';
										echo'</p>';	echo'</div>';
											
								  }
								  }
								  include'';
<?php */?>
<?php include'friendsdetail.php';?>