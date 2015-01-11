<?php include'config.php'?>    


<?php

//echo md5('ranjit');
?>
<script language="javascript">

 function reg()
{
		ml = document.registration.email.value;
		pos1 = ml.indexOf("@")
		pos = ml.indexOf(" ")
		pos2 = (pos1+1)
		server = ml.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
		
	if(document.registration.fname.value=="")
	{
		alert("Please enter first name");
		document.registration.fname.focus();
		document.registration.fname.select();
		return false;
	}
	else if(document.registration.lname.value=="")
	{
		alert("Please enter last name");
		document.registration.lname.focus();
		document.registration.lname.select();
		return false;
	}
	else if(ml == "")
	{
		document.registration.email.focus();
		document.registration.email.select();
		alert("Email cannot be blank");
		return false;              
	}


		else if(ml.indexOf("@")==-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(ml.indexOf(".")==-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		} 
		else if(server.indexOf(".")==0)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
	
	else if(document.registration.password.value=="")
	{
		alert("Please enter password");
		document.registration.password.focus();
		document.registration.password.select();
		return false;
	}

	
	else if(document.registration.password.value.length<6)
	{
		alert("The minimum length of the password is 6 characters...");
		document.registration.password.focus();
		document.registration.password.select();
		return false;
	}
		else if(document.registration.cpassword.values==""){
	 alert("Please Conform the password");
	document.registration.cpassword.focus();
		document.registration.cpassword.select();
		return false;
	}
	else if(document.registration.password.value != document.registration.cpassword.value)
    {
		alert("Password and confirm password is not matching");
		document.registration.cpass.value="";
		document.registration.cpass.focus();
		document.registration.pass.select();
    	return false;
	}
		else if(document.registration.address.value =="")
    {
		alert("Password enter the address");
		document.registration.address.value="";
		document.registration.address.focus();
		document.registration.address.select();
    	return false;
	}
	else if(document.registration.cnumber.value =="")
    {
		alert("You forget to enter the contact number!");
		document.registration.cnumber.value="";
		document.registration.cnumber.focus();
		document.registration.cnumber.select();
    	return false;
	}
	else if(document.registration.gender.value =="")
    {
		alert("Are you boy or a girl!");
		document.registration.gender.value="";
		document.registration.gender.focus();
		document.registration.gender.select();
    	return false;
	}
	
	else if(document.registration.Date.value=="DD")
		{
			alert("Please select Date");
		document.registration.Date.focus();
		return false;
		}
		else if(document.registration.month.value=="Month")
		{
			alert("Please select Month");
		document.registration.month.focus();
		return false;
		}
		else if(document.registration.Year.value=="Year")
		{
			alert("Please select Year");
		document.registration.Year.focus();
		return false;
		}
		
	else
		{
		return true;
		}	
}
</script>
<script type="text/javascript">
function validate(val){
        
        if(cnumber == '')
        {
                alert("Please enter some value.");
        }
        else
        {       
                isnum = /^d+$/.test(val);
                if(isnum)
                        alert('TRUE - This field contains only numbers.');
                else
                        alert('FALSE - This field contains also other characters.');
                }
}
</script>
	</script>



<?php
error_reporting(0);


if(isset($_POST["Submit"]))
{
$datee="$_POST[Year]-$_POST[month]-$_POST[Date]";
$search='yes';
$e=$_POST['email'];
$get_users = mysql_query("SELECT email FROM members where email='$e' ");
 $numrows_email = mysql_num_rows($get_users);

 if ($numrows_email != 0) {
	echo "The Emal is taken by someone!";
}
else{



$sql="INSERT INTO members (fname,lname,address,contact,email,password,gender,bday,search_result)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[cnumber]','$_POST[email]',md5('$_POST[password]'),'$_POST[gender]','$datee','$search')";
$sqlInsert=mysql_query($sql);
//header("Location: index.php");
}
if ($sqlInsert){
?>
<script>
window.setTimeout("location=('http://localhost/go/Social/index.php');",0);

</script>
<?php 
//echo'<div id="dispaly" style="margin-bottom:100px">';
//echo'Now you are the member of socialweb';

//echo'<a href="profilepic">click here to upload a profile picture></a>';
//echo'</div>';
  }else{
  
  echo'Unable to connect at the Moment';
}
}
?>

<html>
<head><title>SocialWeb</title></head>


<link href="css/signup.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--datepicker -->
<link href="css/datepicker/ui.datepicker.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/datepicker/ui.datepicker.js"></script>
<!--datepicker -->
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$(".date").datepicker();
});
</script>

<body>
<div class="mainr">
 <div class="topleft"> </a></div>
<form action="login.php" method="post">
  
  <div class="qwerty">
  <div class="label">              
        <div class="email style1" title="Socialweb"><div id="where" style="float:left; margin-left:-900px; margin-top:5px; font-size:18px; font-weight:bold;">SocialWeb</div>&nbsp;E-mail</div>
        <div class="password">&nbsp;&nbsp;Password</div>
      </div>
      <div class="label1" style="margin-right:100px;">
        <div class="emailtext">
               <input id="username" name="username" title="E-mail"placeholder="Email" tabindex="5" type="text">

        </div>
        <div class="passwordtext">
        <input id="password1" name="password1" title="password"placeholder="Password" tabindex="5" type="password">
          <input name="submit" type="submit" class="greenButton" value="Login"style="margin-top:-20px;margin-right:-13px;"/>
        </div>
      </div>
      <div class="label2">
        
      </div>
    </div>
 
  </form>
   
  </div>

<div class="downleft">
  <div class="picture">
<!--  <img src="photos/c.jpg" width="500" height="330" />--> 
<h3><font color="#003366 ">
<style type="text/css">
#wss{
	opacity:0;
	-webkit-transition:opacity 1.0s linear 0s;
	transition:opacity 1.0s linear 0s;
}
</style>

</head>
<body>
<script>
var wss_i = 0;
var wss_array = ["<font color='#330066'>SocialWeb.</font>","<font color='green'>SocialWeb.</font>","<font color='red'>SocialWeb.</font>","<font color='blue'>SocialWeb.</font>","<font color='#006666'>SocialWeb.</font>"];
var wss_elem;
function wssNext(){
	wss_i++;
	wss_elem.style.opacity = 0;
	if(wss_i > (wss_array.length - 1)){
		wss_i = 0;
	}
	setTimeout('wssSlide()',1000);
}
function wssSlide(){
	wss_elem.innerHTML = wss_array[wss_i];
	wss_elem.style.opacity = 1;
	setTimeout('wssNext()',2000);
}
</script>
</head>
<body>
<h1><font  color=" red">Some People Falls In Love With</font> <span id="wss"></span></h1>
<script>wss_elem = document.getElementById("wss"); wssSlide(); </script></font></h3
 >
 
 
 <?php 
  include'config.php';
  
  $someMembers=mysql_query("Select id,fname,lname,profilepic from members  order by rand() limit 4");
  while($rows=mysql_fetch_array($someMembers)){
  $id=$rows['id'];
  $fname=$rows['fname'];
  $lname=$rows['lname'];
  $concateName=$fname .'&nbsp;'.$lname;
  $pic=$rows['profilepic'];
  if(!empty($pic)){
  echo'<img src="'.$rows['profilepic'].'"height="100px" ;weight="100px" title="'.$concateName.'">&nbsp;&nbsp;';
 // if(empty($pic)){
  }
 //echo '<img src="photos/profile_50.png" style="max-height: 100px">';

	//}		
  }
  ?>
  
  

  <?php  //include'aboutme.php';?>
  
  
  
  </div>


  email:ranjit_12@yahoo.com and
 password:ranjit
  
  
  
  
  
	<script type="text/javascript" SRC="js3/jquery-1.4.2.min.js"></script>
	
	<script type="text/javascript" SRC="js3/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js3/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js3/superfish/supersubs.js"></script>
	
<script SRC="js3/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js3/Liberation_Sans_font.js" type="text/javascript"></script>
		<script type="text/javascript" SRC="js3/jquery.pngFix.pack.js"></script>

	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	
	<SCRIPT type="text/javascript">

pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#email").change(function() { 

var usr = $("#email").val();

if(usr.length >= 4)
{
$("#status").html('<img src="photos/add.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "checking.php",  
    data: "email="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#email").removeClass('object_error'); 
		$("#email").addClass("object_ok");
		$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#email").removeClass('object_ok'); 
		$("#email").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red" style="margin-left:125px;">this is not email <strong></strong> .</font>');
	$("#email").removeClass('object_ok'); 
	$("#email").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
  
  <div class="field">
    <div class="signup"> Socialweb </div>
	<div class="free">Sign up Today! it is Free.	</div>
	<div class="text">
	<form  method="POST" action="" name="registration" onSubmit="return reg()">
	  	<div class="textleft">FirstName:</div>
		<div class="textright"><input name="fname" type="text" class="textfield" maxlength="11"   value=""><font color="Red"> </font>
		</div>
		<div class="textleft">LastName:</div>
		<div class="textright"><input name="lname" type="text" class="textfield" maxlength="10"value=""/><font color="Red"><?php //echo //$vlname; ?> </font>
		</div>            <p>
							<div class="textleft"><label>email:</div>
								<input id="email"class="textfield" style="width: 220px; margin-left:2px; font-weight: bold; color: #222;
text-transform: none;" type="text" name="email" /><br /><span id="status"></span></label>
						
</p>
		<!--<div class="textleft">E-mail:</div>
		<div class="textright"><input name="email"  id="email" type="text" class="textfield" value="<?php //echo //$login; ?>"/><font color="Red"><?php //echo $vlogin; ?> </font><font color="Red"> <?php //echo $u; ?></font><span id="status"></span>
		</div>-->
		<div class="textleft">Password:</div>
		<div class="textright"><input name="password" type="password" id="password" class="textfield"value="<?php //echo $password; ?>"/><font color="Red"><?php //echo $vpassword; ?> </font><span class="first"></span>
		</div>
		<div class="textleft">Retype Password:</div>
		<div class="textright"><input name="cpassword" type="password" class="textfield"value="<?php //echo  $cpassword; ?>"/><font color="Red"><?php //echo $vcpassword; ?> </font><font color="Red"><?php //echo $a; ?> </font>
		</div>
		<div class="textleft">Address:</div>
		<div class="textright"><input name="address" type="text" class="textfield" maxlength="10"value="<?php //echo //$address; ?>"/><font color="Red"><?php //echo $vaddress; ?> </font>
		</div>
		<div class="textleft">Nick Name:</div>
		<div class="textright"><input name="cnumber" type="text" class="textfield" maxlength="10" size="40" value="<?php //echo $cnumber; ?>" /><font color="Red"><?php //echo $vcnumber; ?> </font>
		<input name="propic" id="dadded" type="hidden" value="upload/p.jpg" /></div>
		
		<div class="textleft">Gender:</div>
		<div class="textright1">
			<div class="input-container">
			  <select name="gender" id="gender" class="textfield1"><?php // $vgender; ?> 
			    <option ></option>
                <option >Female</option>
                <option >Male</option>
				 <option >Other<option>

              </select><br />
			</div>
		</div>
		<div class="textleft">Birth Day:</div>
						  <select name="Date" >
			      <option>DD</option>
			      <?php
for($i=1; $i<= 31; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
			      </select>
			    <select name="month">
			      <option>Month</option>
			      <option value="01">Jan</option>
			      <option value="02">Feb</option>
			      <option value="03">Mar</option>
			      <option value="04">Apr</option>
			      <option value="05">May</option>
			      <option value="06">Jun</option>
			      <option value="07">Jul</option>
			      <option value="08">Aug</option>
			      <option value="09">Sep</option>
			      <option value="10">Oct</option>
			      <option value="11">Nov</option>
			      <option value="12">Dec</option>
			      </select>
			    <select name="Year">
			      <option value="Year">Year</option>
			      <?php
for($i=1957; $i< 2014; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
		        </select>
						</p>
		
		</div>
		<div class="input-container">
	

		<div class="textright" style="margin-right:40px"><img src="fotos/smiley-pointing-down.gif">
		  <input type="submit" name="Submit" value="Sign Up" class="greenButton1" /><a href="about_me.php" target="_blank">About me</a>
		  <iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Franjit.karki.140&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
	
		</div>
		 
		</form>
		 </div>
		 </div>
		 

<style type="text/css">
html{
min-height:100%;
}
body {
	/*background-image: url(photos/student.jpg);
	background-repeat: no-repeat;
	background-size:cover;*/
	
	}
	

</style>
	
	 
</body>
</html>




