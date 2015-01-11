<style>
.ticker {
width: 200px;
height: 300px;
overflow: hidden;
border: 1px solid #DDD;
border-radius: 5px;
box-shadow: 0px 0px 5px #DDD;
background-color:  #F5F3E5;
text-align: left;
float:right
}
.ticker h3 {
padding: 0 0 10px 10px;
border-bottom: 1px solid #A7A7A7;
}
ul {
list-style: none;
padding: 0;
margin: 0;
font-style: italic;
}
ul li {
list-style: none;
height:50px;
padding:7px;
border-bottom: 1px solid #D6CFB8;
}
</style>

<script type="text/javascript">
function ticker() {
    $('#ticker li:first').slideUp(function() {
        $(this).appendTo($('#ticker')).slideDown();
    });
}
setInterval(ticker, 3000);
</script>
<div class="ticker">
   <h3>Latest News</h3>
   <ul id="ticker">
   <?php  include'config.php';?>
       <li>
	   <?php
	//$commentid=$_SESSION['SESS_MEMBER_ID'];
								
				$result3 = mysql_query("SELECT * FROM members limit 7 order by id desc");
								
				while($row3 = mysql_fetch_array($result3)
				{
				$n=$row3['fname'];
				echo $n;
				}
	   ?>
	   </li>

<ul>
</ul>
</div>
<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Ticker</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js "></script>
    </head>
 <body>
 </body>
</html>