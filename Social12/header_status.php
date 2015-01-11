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
<link rel="stylesheet" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css">
<link rel="stylesheet" href="style.css">
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
  			$('.nav').scrollToFixed();
		});
	</script>

<div class="nav">
 
<div id="header">


  
			   
<div id="left"  style="color:#fff; margin-left:100px; font:Arial, Helvetica, sans-serif; font-size:20px; margin-top:-5px; cursor:pointer;">
SocialWeb&nbsp;&nbsp;
			
			  <?php //include'zebra.php';  ?>
		
</div>  <input type="text" class="search" id="searchid" placeholder="Search for people by Name or Email or Gender:" style="float:left; margin-top:-100xp;margin-left:200px" />

<div id="result"></div>

<div id="right">


			 
 
</div>

</div> <div id="divLine"></div>


<div class="clear">
</div>
</body>

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
