<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<link rel="stylesheet" href="css/.css">

<?php
	require_once('auth.php');
?>

<?php //include'header_status.php'; ?>

<div id="header">


  
			   
<div id="left"  style="color:#fff; margin-left:100px; font:Arial, Helvetica, sans-serif; font-size:20px; margin-top:-5px; cursor:pointer;">
<a href="status.php" style="text-decoration:none; color:#FFFFFF;">SocialWeb&nbsp;</a>&nbsp;
			
			  <?php //include'zebra.php';  ?>
		
</div>  <input type="text" class="search" id="searchid" placeholder="Search for people by Name or Email:" style="float:left; margin-top:-100xp;margin-left:200px" />

<div id="result"></div>

<div id="right">

  <?php //include'zebra.php';  ?>
 
</div>

</div> <div id="divLine"></div>
<div class="clear">
</div>
<div id="wrapper">

  <div id="Layer1" style=" margin-top:125px; margin-left:0px; border-radius:15;">
	             <?php
				 
				 //select  member who is logged in to change profilepic
				 
 			   include('config.php');			
					$commentid=$_SESSION['SESS_MEMBER_ID'];
								
				$result3 = mysql_query("SELECT * FROM members where id='".$_GET['id']."'");
								
				while($row3 = mysql_fetch_array($result3))
				
								  { 
								 
								  
								  
			  	echo '<img src="'.$row3['profilepic'].'" height="124" width="140" style="border-width: 0px; margin-left:0; background:#000;">';
								  
								  }
				?>
				</div>


<?php 
			   include('config.php');			
					
								
								$result3 = mysql_query("SELECT * FROM members where id='".$_GET['id']."'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			                    $adminVerified=$row3['id'];
								if($adminVerified==6){
								echo'<font color="blue" style="margin-left:300px; font-weight:bold;">Admin Profile</font>';
			  
			  		echo '<img src="'.$row3['coverphoto'].'" height="250px" width="800px" style="border-width: 0px;">';
								  }
								  else
								  {
								 echo '<img src="'.$row3['coverphoto'].'" height="250px" width="800px" style="border-width: 0px; margin-left:100px;">';

								  }
								if(empty($row3['coverphoto'])){
						echo'<font color="red" style="float:right;margin-top:-150px;margin-right:100px;">This user doesnot have a CoverPhoto yet!</font>';
						}
								
								
								
								 }
				?>
	



</div>

<?php
	include('config.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	//echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>	
	
	

            

         <?php 
			  $get=$_GET['id'];
			  $commentid=$_SESSION['SESS_MEMBER_ID'];
			  
			  if($get!=$commentid){

?>
				 <div class="uiButtonGroup"><a rel="facebox" href="mesages.php?id=<?php echo $_GET['id']; ?>" style="text-decoration:none;">message</a>
  <?php }
			 
			 
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id']."' and status='accepted' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			           
			        echo'<div id="details1">';
								  
										//echo '<a style="text-decoration:none;
//margin-top:100px;margin-left:20px;cellspacing:1px;" href=profile.php?id='.$row1["id"] .'>'.'<img src="'.$row1['profilepic'].'"&nbsp;&nbsp;&nbsp;&nbsp; title="'.$row1['fname'].' '.$row1['lname'].'" style=" max-width: 50px"></a>';echo'&nbsp;&nbsp;&nbsp;';
											//echo'</br></br>';
											echo'</div>';
											
								  }
								  }
?>
				 
                   <?php
			   include('config.php');			
					$commentid=$_GET['id'];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
			//	include_once'friendsdetail.php'; 
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						//Check whether the query was successful or not
						
							if(mysql_num_rows($result) > 0) {
								
							}else {
								//echo '<a style="text-decoration:none" href=sendrequest.php?id='.$commentid.' title="Click to Send friend Request">'.'| add as friend'.'</a>';
							}
						?>
		  <?php
			   include('config.php');			
					$commentid=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			        echo'<div id="details">';
					  if(empty($row3['fname'])){
						echo'<font - color="#996600;">';print'FirstName:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask Name</font></b><br><hr>';
						}else{
					echo'<font - color="#996600;">';print'FirstName:';echo'</font>';echo '<font - color="red">'.$row3['fname'].'</b><br><hr>';}                    if(empty($row3['lname'])){
						echo'<font - color="#996600;">';print'lastName:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask LastName</font></b><br><hr>';
						}else{
				
							echo'<font - color="#996600;">';print'LastName:';echo'</font>';echo '<font - color="red">'.$row3['lname'].'</b></br><hr>';}
							
							
							
			  				echo'<font - color="#996600;">';print'Address:';echo'</font>';echo '<font - color="red"><b> '.$row3['address'].' '.$row3['city'].'<br><hr>';
					//echo '<div style="height: 15px;">Contact: '.$row3['contact'].'/'.$row3['email'].'</div>';
						echo'<font - color="#996600;">';print'Gender:';echo'</font>';echo '<font - color="red"> '.$row3['gender'].'<br><hr>';	
						echo'<font - color="#996600;">';print'DOB:';echo'</font>';echo '<font - color="red"> '.$row3['bday'].'</b><br><hr>';                    if(empty($row3['contact'])){
						echo'<font - color="#996600;">';print'Contact:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask for  contact Number</font> </b><br><hr>';
						}else{
						echo'<font - color="#996600;">';print'Contact:';echo'</font>';echo '<font - color="red"> '.$row3['contact'].'</b><br><hr>';	}
						echo'<font - color="#996600;">';print'Work:';echo'</font>';echo '<font - color="red">'.$row3['work'].'</b><br><hr>';	  
						if(empty($row3['relation'])){
						echo'<font - color="#996600;">';print'Relation:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask About relation(Married,single or In relation)</font></b><br><hr>';
						}else{
					echo'<font - color="#996600;">';print'Relation:';echo'</font>';echo '<font - color="red">'.$row3['relation'].'</b><br><hr>';}    
						
						echo'<font - color="#996600;">';print'School:';echo'</font>';echo '<font - color="red">'.$row3['school'].'</b><br><hr>';	   if(empty($row3['college'])){
						echo'<font - color="#996600;">';print'FirstName:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask About College where study</font></b><br><hr>';
						}else{
					echo'<font - color="#996600;">';print'FirstName:';echo'</font>';echo '<font - color="red">'.$row3['college'].'</b><br><hr>';}                 //   if(empty($row3['college'])){
					
						echo'<font - color="#996600;">';print'Interest:';echo'</font>';echo '<font - color="red"> '.$row3['interest'].'</b><br><hr>';                    if(empty($row3['interest'])){
						echo'<font - color="#996600;">';print'Interest:';echo'</font>';echo '<font - color="red"> <font color="#000">Ask about Interest</font> </b><br><hr>';
						}else{
						echo'<font - color="#996600;">';print'Interest:';echo'</font>';echo '<font - color="red"> '.$row3['interest'].'</b><br><hr>';	}
								echo'<font - color="#996600;">';print'About:';echo'</font>';echo '<font - color="red">'.$row3['aboutme'] .'</b><br><hr>';	  
								
								  }
								  echo'</div>';
								 echo'<br><br><br><br>';
				?>
		    
            <?php
	include('config.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id']."' and status='accepted' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="5" color="white"><b>' . $numberOfRows . '</b></font>'; 
	?>
		    <a rel="facebox" href="listfriends.php?id=<?php echo $_GET['id']; ?>" style="text-decoration:none; color:#FFFFFF;"></a>  </div>
	    </div>
	</div>



<?php 
 
			   include('config.php');			
				
								
								$result = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id']."' and status='accepted' ORDER BY requested ASC");
								
								
								while($row3 = mysql_fetch_array($result))
								  {
								  $qwe=$row3['addedby'];
								  $result1 = mysql_query("SELECT * FROM members WHERE id='$qwe'");
								
								
								while($row1 = mysql_fetch_array($result1))
								  { 
			               echo'<br><br>';
			        echo'<div id="details1">';
								  
										echo '<a style="text-decoration:none;
margin-top:100px;margin-left:20px;cellspacing:1px;" href=profile.php?id='.$row1["id"] .'>'.'<img src="'.$row1['profilepic'].'" title="'.$row1['fname'].' '.$row1['lname'].'" style=" max-width: 50px"></a>';
											//echo'</br></br>';
											echo'</div>';
											
								  }
								  }
?>
<style>
body{
height:700px;
}
hr{
border: solid 1px #B4BBCD;
}
#friend{
float:left;
margin-top:400px;

}
#details{
float:left;
margin-left:280px;
margin-top:30px;
height:300px;
width:800px;

background:#fff;


 line-height:1.4em; /*Gives space between line*/

 font-family:"Courier New", Courier, monospace;
 
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:1px;
-moz-border-radius:1px;
 border-radius:1px;
-webkit-box-shadow:0 0 1px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 1px rgba(0,0,0,0.4);
 box-shadow:0 0 1px rgba(0,0,0,0.4);
}
#details:hover{
background: #fff;
color:blue;
}
#details1{
float:left;
margin-left:250px;
margin-top:10px;
width:100px;
background:#fff;
 text-align:center;
  margin-left:auto;
  margin-right:auto;


 /*Gives space between line*/




</style>

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});


$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>

</script>
<style type="text/css">
	input{
	background: #CCCCCC;
	color:#FFFFFF;
	font-size:12px;
	font-family:"Courier New", Courier, monospace;
	}
	#searchid
	{
		width:400px;
		border:solid 1px #fff;
		height:30px;
		margin-top:-11px;
		border-radius:0px;
		
		
		
		
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:390px;
	margin-left:-17px;
		display:none;
		margin-top:25px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color:#FFF;
	}
	.show
	{
		padding:10px; 
	border-bottom:1px #999 dashed;
		font-size:15px;
		 
		height:50px;
	
		
	}
	.show:hover
	{
		background: #0099FF;
		color:#FFF;
		cursor:pointer;
		text-decoration:none;
		
	}
	
</style>
<?php  include'fotter2.php'?>