<?php
	require_once('auth.php');
?>

<html>
<link rel="icon" href="images/App-share-manager-icon.png" type="image" />
<link rel="shortcut icon" href="images/App-share-manager-icon.png" type="image" />
<title>i share</title>
<style type="text/css">
<!--
#Layer1 {
position:absolute;
	margin-top: 180px; margin-left: 10px;
	width:124px;
	height:124px;
	border:solid 1px #B4BBCD;
	background-color:#FFFFFF;
	z-index:1;	

}
#Layer3 {
position:absolute;
	margin-top: 10px;
	width:300px;
	z-index:1;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
	margin-left: 149px; height: 27px;
	
}
#Layer4 {
position:absolute;
	z-index:1;
	margin-left: 7px; margin-top: 7px; width: 64px; height: 64px;
}
#Layer6 {
position:absolute;
	margin-top: 10px;
	width:300px;
	z-index:1;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
	margin-left: 450px; height: 27px;
	
}
-->
</style>
<head>
<script language="JavaScript" type="text/javascript" src="suggest.js"></script>

<style>
body { background-color: #E7EBF2; font-family:arial; font-size:13px }
#container, #containertop	{	width:860px; margin: 0 auto; 	}

.borderclass { border:1px solid #A9B6D2; }
.item {
  width: 408px;
  margin: 10px;
  float: left;
  margin-top:10px;
  background-color:#ffffff;
  border:solid 1px #B4BBCD;
min-height:50px;
text-align:justify;
word-wrap:break-word; 
}
.topbox
{
margin: 10px;


margin-top: 10px;
background-color: white;
border: solid 1px #B4BBCD;

}


.item div, .topbox div
{
padding:8px;	
}
.rightCorner { 
    background-image: url("images/right.png");
    display: block;
    height: 15px;
    margin-left: 408px;
    margin-top: 8px;
    padding: 0;
    vertical-align: top;
    width: 13px;
z-index:2;

	position: absolute;
}
.leftCorner{
background-image: url("images/left.png");
display: block;
height: 15px;
width: 13px;
margin-left: -13px;
margin-top: 8px;
position: absolute;
z-index:2;
}
#popup{ display: block; 
 width: 408px;
  float: left;
  margin-top:10px;
  background-color:#ffffff;
  border:solid 1px #A9B6D2;
  min-height:60px;
  display:none;
  position:absolute;
  margin:10px;
 }
.Popup_rightCorner
{
background-image: url("images/right.png");
    display: block;
    height: 15px;
    margin-left: 408px;
    margin-top: 8px;
    padding: 0;
    vertical-align: top;
    width: 13px;
z-index:2;

	position: absolute;
}
 #box
{
padding:8px;	

}
#update
{
width:100%;
}

 .timeline_container{
                width: 16px;
                text-align: center;
                margin: 0 auto;
				cursor:pointer;
				    display: block;
            }
            .timeline{
                                
                margin: 0 auto;
				 background-color:#e08989;
    display: block;
    float: left;
    height: 100%;
    left: 428px;
    margin-top: 0px;
    position: absolute;
    width: 4px;
            }
            .timeline:hover{
                cursor: pointer;
				margin: 0 auto;
            }
            .timeline div.plus{
                width: 14px;
                height: 14px;
               
                position: relative;
                left: -6px;
            }
			#update_button {
background-color: #cc0000;
color: white;
font-weight: bold;
padding: 5px;
border: solid 1px #333;
margin-top: 5px;
cursor: pointer;
}
.shade{box-shadow:0px 0px 18px #000;-moz-box-shadow:0px 0px 18px #000;-webkit-box-shadow:0px 0px 18px #000}
h1{ font-family: 'Georgia',Times New Roman; }
.timeline:hover
{
cursor: none;
}
.delete
{
font-weight:bold;
float:right;
text-decoration:none;
margin:8px 10px 8px 10px;
color:#cc0000
}
</style>
<link rel="stylesheet" href="menu.css" type="text/css" media="screen" />


<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

</head>
<body>

<div id="containertop" >
  <div id='profile' style='margin:10px;height:50px;'>
    



<ul id="menu">
<a rel="facebox" href="request.php"><img src="images/friends.png" border="0"></a>
<?php
	include('config.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>	
	
	
	<a rel="facebox" href="messages.php"><img src="images/e_mail.png" border="0"></a>
	<?php
	include('config.php');

$result = mysql_query("SELECT * FROM messages WHERE pakadtoan='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' ORDER BY pakadtoan ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo '<font size="2" color="red"><b>' . $numberOfRows . '</b></font>'; 
	?>

<input type="text" id="amots" name="amots" onKeyUp="bleble();" autocomplete="off" style="margin-top: 10px; margin-left: 109px;"/>
	<div id="layers" style="margin-right:109px; float:left;"></div>
  <li class="menu_right" style="margin-right: 15px; float:right"><a href="#" class="drop">Accounts</a><!-- Begin 3 columns Item -->

    

      <div class="dropdown_3columns align_right"><!-- Begin 3 columns container -->

            

         

            

          <div class="col_3">

              <?php
			   include('config.php');			
					$commentid=$_SESSION['SESS_MEMBER_ID'];
								
								$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo '<img src="'.$row3['profilepic'].'" height="124" width="124">'.'</a>';
					$wwww=$row3['fname'].' '.$row3['lname'];
								  
								  }
				?>
    

              

              <p align="center"><?php echo $wwww; ?></p>
			  <p align="center"><a href="index.php">logout</a></p>
          </div>
      </div><!-- End 3 columns container -->
    </li>
    <!-- End 3 columns Item -->
</ul>
  </div>
  <div id='profile1' style='margin: -12px 10px 10px; height: 250px; background-color: rgb(255, 255, 255); border: 1px solid rgb(180, 187, 205);'>
			  	
			  <div id="Layer1">
			  
			  
			  <?php
			   include('config.php');			
					$commentid=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo '<img src="'.$row3['profilepic'].'" height="124" width="124" style="border-width: 0px;">';
								  
								  }
				?>
			  
			  
			  
			  
			  
			  
			  </div>
			  
  </div>
			  <div id='profile2' style='height: 130px; background-color: rgb(255, 255, 255); border-width: 0px 1px 1px; border-style: solid; border-color: rgb(180, 187, 205); margin-left: 10px; margin-right: 10px; margin-top: -10px;'>
			 
			 <div id="Layer3">
			  
			  
			  <?php
			   include('config.php');			
					$commentid=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM members where id='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo '<b>'.$row3['fname'].' '.$row3['lname'].'  Photos</b>';
								  
								  }
				?>
			  
			  
			  
			  
			  
			  
			  </div>
			 
			
			
			  
			  <div id='profile3' style='height:auto; background-color: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(180, 187, 205); margin-left: 10px; margin-right: 10px; margin-top: 5px; padding: 5px;'>
			 <?php
			   include('config.php');			
					$commentid=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM photos where uploadedby='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo '<a href="'.$row3['location'].'" rel="facebox">'.'<img src="'.$row3['location'].'" height="124" width="124" style="padding-top: 10px; padding-left: 10px; padding-right: 10px; border-width: 0px;">'.'</a>';
								  
								  }
				?>
			  </div>
			  
			  
			  
</div>

	
		
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="jquery.masonry.min.js"></script>

<script>
$(function(){


function Arrow_Points()
{ 
var s = $('#container').find('.item');
$.each(s,function(i,obj){
var posLeft = $(obj).css("left");
$(obj).addClass('borderclass');
if(posLeft == "0px")
{
html = "<span class='rightCorner'></span>";
$(obj).prepend(html);			
}
else
{
html = "<span class='leftCorner'></span>";
$(obj).prepend(html);
}
});
}

$('.timeline_container').mousemove(function(e)
{
var topdiv=$("#containertop").height();
var pag= e.pageY - topdiv-26;
$('.plus').css({"top":pag +"px", "background":"url('images/plus.png')","margin-left":"1px"});}).
mouseout(function()
{
$('.plus').css({"background":"url('')"});
});
	
	
				
$("#update_button").live('click',function()
{
var x=$("#update").val();
$("#container").prepend('<div class="item"><a href="#" class="deletebox">X</a><div>'+x+'</div></div>');

//Reload masonry
$('#container').masonry( 'reload' );

$('.rightCorner').hide();
$('.leftCorner').hide();
Arrow_Points();

$("#update").val('');
$("#popup").hide();
return false;
});

// Divs
$('#container').masonry({itemSelector : '.item',});
Arrow_Points();
  
//Mouseup textarea false
$("#popup").mouseup(function() 
{
return false
});
  
$(".timeline_container").click(function(e)
{
var topdiv=$("#containertop").height();
$("#popup").css({'top':(e.pageY-topdiv-33)+'px'});
$("#popup").fadeIn();
$("#update").focus();

	
});  


$(".deletebox").live('click',function()
{
if(confirm("Are your sure?"))
{
$(this).parent().fadeOut('slow');  
//Remove item
$('#container').masonry( 'remove', $(this).parent() );
//Reload masonry
$('#container').masonry( 'reload' );
$('.rightCorner').hide();
$('.leftCorner').hide();
Arrow_Points();
}
return false;
});



//Textarea without editing.
$(document).mouseup(function()
{
$('#popup').hide();

});
 
  
});
</script>

</body>
</html>