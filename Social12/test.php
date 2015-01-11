<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script>
function verifyEmail(){
    
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.alokm.email.value.search(emailRegEx) == -1) {
          alert("Please enter a valid email address.");
     }
    
     
    
     return false;
}

</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/pswd.css" />
	
	
	<title>face</title>
	
	<link rel="shortcut icon" HREF="images/aaa.png" />
	
	
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
	
	
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12, 
				maxWidth:    27, 
				extraWidth:  1    
								  
			}).superfish();
							
		}); 
	</script>

	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
		
function passwordStrength(password)

{

        var desc = new Array();

        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Medium";
        desc[4] = "Strong";
        desc[5] = "Strongest";

        var score   = 0;

        if (password.length > 6) score++;

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;


        if (password.match(/\d+/)) score++;

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;


        if (password.length > 12) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	</script>
	
	
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	
	<SCRIPT type="text/javascript">

pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); 
		$("#username").addClass("object_ok");
		$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); 
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
	$("#username").removeClass('object_ok'); 
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>

</head>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
      <h1 class="logo"> <a href="index.php">face</a> </h1>
    </div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="login.php">LogIn</a> </li>
        <li> <a href="reg.php">Sign Up</a>
                    </li>
        <li><a href="contact.php">Contact</a></li>
        <li></li>
      </ul>
     
    </div>
 
  </div>
  
  <div class="clear"></div>
</div>
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="index.php">Home</a> � Sign Up</p>
				<p><?php 
include('config.php');
										
					if (isset($_POST['register'])) { 
					if (
					!$_POST['username']|
					!$_POST['password']|
					!$_POST['firstname']|
					!$_POST['lastname']|
					!$_POST['email']|
					!$_POST['address']|
					!$_POST['birthday_month']|
					!$_POST['birthday_day']|
					!$_POST['birthday_year']|
					!$_POST['gender']|
					
					!$_POST['yr_sec']|
					!$_POST['checkbox']){

		die('Please complete all the required feilds!');
		}
		
		
	
 	$_POST['password'] = ($_POST['password']);
	$_POST['gender'] = ($_POST['gender']);
	$_POST['birthdate'] = ($_POST['birthday_month'] . "/" . $_POST['birthday_day']. "/" . $_POST['birthday_year'] );
$_POST['birthday_month'] = ($_POST['birthday_month']);
	$_POST['birthday_day'] = ($_POST['birthday_day']);
	$_POST['birthday_year'] = ($_POST['birthday_year']);
	$type = "Student";


	
 	if (!get_magic_quotes_gpc()) {
 		$_POST['password'] = addslashes($_POST['password']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}

	
	$insert = "INSERT INTO members SET 

contact_no=' ',
relationship=' ',
interest=' ',
quote='hiiiii',
hometown 	=' ',
college=' ',
high_school=' ',
aboutme=' ',
batch=' ',
status=' ',


id_no = ' ',
username='$_POST[username]', 
password='$_POST[password]', 
firstname='$_POST[firstname]', 
lastname='$_POST[lastname]', 
email='$_POST[email]', 
address='$_POST[address]', 
birthdate='$_POST[birthdate]', 
b_month='$_POST[birthday_month]', 
b_day='$_POST[birthday_day]', 
b_year='$_POST[birthday_year]', 
gender='$_POST[gender]', 
course=' ', 
image='$_POST[image]', 
yr_sec='$_POST[yr_sec]', 
type=' ', 
confirmation='1'";
	
 	$add_member = mysql_query($insert);

if(!$add_member)
{die('<h2>use other username</h2> ');}

	
header("location: note.php");
exit();
}
 ?> </p>
			</div>
			
			
		</div>
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
		<div class="right" align="right"style="margin-left: 0px; padding-left: 20px;">
		<h1>Welcome to face......</h1><br>
                           It is free<br>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Always will be.....<br>
		

<img src="images/signup.png"><br>

 
</div>
			<div class="grid_12" style="width: 350px;">
				<fieldset>
					<legend>Sign Up</legend>

					<form id="form1" method="post" action="reg.php" name="alokm">
					 <input name="image" type="hidden" value="uploads/propic.jpg" />
						<h3>&nbsp;</h3>
						
						<p>
							<label>Username:
							<input id="username" style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" type="text" name="username" /><br /><span id="status"></span></label>
						</p>
						<p>
							<label>Password:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" name="password" type="password" onkeyup="passwordStrength(this.value)" /></label> 
                        <br />
                        <span id="passwordDescription"></span>
                        <span id="passwordStrength" class="strength0"></span>

						</p><br />
						<p>
							<label>Firstname:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;" type="text" name="firstname" /></label>
						</p>
						<p>
							<label>Lastname:
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;"" type="text" name="lastname" /></label>
						</p>
						<p>
							<label>Email:<br />
							<input type="text" style="width: 250px; font-weight: bold; color: #222;
text-transform: none;" onblur="verifyEmail()" name="email" /></label>
						</p>
						<p>
							<label>City:<br>
							<input style="width: 250px; font-weight: bold; color: #222;
text-transform: capitalize;" type="text" name="address" /></label>
						</p>
						<p>
							<label>Birthdate:<br />
							  <input name="birthdate" type="hidden" size="25" />
						 <div id="bmonth"><select class="" style="width: 100px;
font-weight: normal;
color: #222;" name="birthday_month" ></div>
                         <span id="valmonth" style="display:none;">
                        <option value="-1">Month:</option>
                        <option value="January">Jan</option>
                        <option value="February">Feb</option>
                        <option value="March">Mar</option>
                        <option value="April">Apr</option>
                        <option value="May">May</option>
                        <option value="June">Jun</option>
                        <option value="July">Jul</option>
                        <option value="August">Aug</option>
                        <option value="September">Sep</option>
                        <option value="October">Oct</option>
                        <option value="November">Nov</option>
                        <option value="December">Dec</option>
                      </select></span>
                      <span id="bday">
                         <select name="birthday_day" style="width: 100px;
font-weight: normal;
color: #222;" autocomplete="on"></span> <span id="valday" style="display:none;">
                           <option value="-1">Day:</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                           <option value="13">13</option>
                           <option value="14">14</option>
                           <option value="15">15</option>
                           <option value="16">16</option>
                           <option value="17">17</option>
                           <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="31">31</option>
                         </select></span>
                        <span id="byear"> <select name="birthday_year" style="width: 100px;
font-weight: normal;
color: #222;" autocomplete="on"></span><span id="valyear" style="display:none">
                           <option value="-1">Year:</option>
                           <option value="2011">2011</option>
                           <option value="2010">2010</option>
                           <option value="2009">2009</option>
                           <option value="2008">2008</option>
                           <option value="2007">2007</option>
                           <option value="2006">2006</option>
                           <option value="2005">2005</option>
                           <option value="2004">2004</option>
                           <option value="2003">2003</option>
                           <option value="2002">2002</option>
                           <option value="2001">2001</option>
                           <option value="2000">2000</option>
                           <option value="1999">1999</option>
                           <option value="1998">1998</option>
                           <option value="1997">1997</option>
                           <option value="1996">1996</option>
                           <option value="1995">1995</option>
                           <option value="1994">1994</option>
                           <option value="1993">1993</option>
                           <option value="1992">1992</option>
                           <option value="1991">1991</option>
                           <option value="1990">1990</option>
                           <option value="1989">1989</option>
                           <option value="1988">1988</option>
                           <option value="1987">1987</option>
                           <option value="1986">1986</option>
                           <option value="1985">1985</option>
                           <option value="1984">1984</option>
                           <option value="1983">1983</option>
                           <option value="1982">1982</option>
                           <option value="1981">1981</option>
                           <option value="1980">1980</option>
                           <option value="1979">1979</option>
                           <option value="1978">1978</option>
                           <option value="1977">1977</option>
                           <option value="1976">1976</option>
                           <option value="1975">1975</option>
                           <option value="1974">1974</option>
                           <option value="1973">1973</option>
                           <option value="1972">1972</option>
                           <option value="1971">1971</option>
                           <option value="1970">1970</option>
                         </select></span>
						</p>
						<p>
							<label>Gender:
							<select name="gender" style="width: 300px; font-weight: bold; color: #222;
text-transform: none;">
                             <option value="-1" selected="selected">-Select Gender-</option>
                             <option>Male</option>
                             <option>Female</option>
                           </select></label>
						</p>
                        <p>
							<label>country:
							<input style="width: 300px; font-weight: bold; color: #222;
text-transform: uppercase;"" type="text" name="yr_sec" /></label>
						</p>
							<br />							
						<p><input type="radio" name="checkbox" id="check"  checked/>
                                 <a href="termsofuse.php">Terms of Use</a><br /><br />
							<input class="button" value="Sign Up" type="submit" name="register" />
							
						</p>

					</form>

				</fieldset>

				
		  </div>
			<!-- end grid -->
			
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
	<div id="sub_footer">
      <div class="container_12 clearfix">
        <div class="grid_12"> <a class="logo left" href="#">face</a>
          <p><small>&copy;&nbsp; All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
        </div>
     
      </div>
	
    </div>
	
	<script type="text/javascript"> Cufon.now(); </script>
	
	
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
<?php ob_flush(); ?>