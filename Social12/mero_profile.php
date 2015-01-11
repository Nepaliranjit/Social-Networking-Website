<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/btnstyle.css">
<link rel="stylesheet" href="css/.css">
	<?php
	include'config.php';
	include'auth.php';
	//include'header.php';
	?>

<div id="header">

<div id="left"  style="color:#fff; margin-left:100px; font:Arial, Helvetica, sans-serif; font-size:20px; margin-top:-5px; cursor:pointer;">
SocialWeb&nbsp;&nbsp;
			
			  <?php //include'zebra.php';  ?>
		
</div
><a href="status.php"style="color:#fff;font:Arial, Helvetica, sans-serif;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;

</div>

<div id="right">
</div>

</div> <div id="divLine"></div>
	

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(document).ready( function() {
	$("#edit").click( function() {
		$("#forms").fadeIn();
		$("#cancel1").fadeIn();
		$("#form01").fadeOut();
		$("#edit").fadeOut();
	});	
	$("#cancel1").click( function() {
		$("#forms").fadeOut();
		$("#cancel1").fadeOut();
		$("#form01").fadeIn();
		$("#edit").fadeIn();
	});	
	$("#cancel2").click( function() {
		$("#forms2").fadeOut();
		$("#cancel2").fadeOut();
		$("#form02").fadeIn();
		$("#edit2").fadeIn();
	});	
	$("#edit2").click( function() {
		$("#forms2").fadeIn();
		$("#cancel2").fadeIn();
		$("#form02").fadeOut();
		$("#edit2").fadeOut();
	});	
	$("#change").click( function() {
		$("#account").fadeIn();
		$("#cancel3").fadeIn();
		$("#pass").fadeOut();
		$("#change").fadeOut();
	});	
	$("#cancel3").click( function() {
		$("#account").fadeOut();
		$("#cancel3").fadeOut();
		$("#pass").fadeIn();
		$("#change").fadeIn();
	});	
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

        //if password bigger than 6 give 1 point

        if (password.length > 6) score++;

        //if password has both lower and uppercase characters give 1 point      

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

        //if password has at least one number give 1 point

        if (password.match(/\d+/)) score++;

        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

        //if password bigger than 12 give another 1 point

        if (password.length > 12) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	</script>

	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 700px;">
			  <fieldset style="width: 700px;">
			  
<div id="box">
				<legend>Password Update</legend>
					<div id="pass">
					<span style="color:#222; font-weight:bold;"> </span><span id="info" style="margin-left: 61px; text-transform:none;"><?php //echo $display['username'] ?></span><br />
					<script type="text/javascript">
					var password = <your password here>
var dispPassword = new String();
var n = password.length;
while(dispPassword.length < n){ 
        dispPassword.push("*"); 
}
document.getElementById("password").innerHTML = dispPassword;

                   <?php
				   $ranjitsql=mysql_query("select * from members where id='".$_SESSION['SESS_MEMBER_ID']."'");
				   while($rows=mysql_fetch_array($ranjitsql)){
				   $fname=$rows['fname'];
				   
				   
				   ?>

</script>
					<span style="color:#222;; font-weight:bold;"> </span><span id="password" style="margin-left: 61px;">
			  <input type="hidden" name="password" value="<?php //echo $rows['password'] ?>" style="border: 0px black solid; width: 100px;
					font-weight: bold;" "readonly=readonly"></span><span style="color:#ff0000;"><?php //echo $error;?></span></div>
					<div id="change" style="font-size: 10px;"><a><div id="show">Change Password</a></div></div>
				<div id="cancel3" style="display:none; padding-left: 620px;"><a>Cancel</a></div>
<div id="account" style="display:none;">
					<form id="form1" method="post" action="mero_profile.php">
						
						<p><label for="text_field">Current Password:</label>
						<div id="entry-text">
						 <input type="password" name="old_pass"/><br />
					  </div>
						</p>
						<p><label for="text_field">New Password:</label>
						<div id="entry-text">
						<input id="text" name="password" type="password" onKeyUp="passwordStrength(this.value)" /></label> 
						<br />
						<label for="passwordStrength">Password strength</label>

                        <div id="passwordDescription">Password not entered</div>

                        <div id="passwordStrength" class="strength0"></div>

                        </div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit3"onclick="alert('change updated!')"/>
							<input class="button" value="Clear" type="reset" />
						</p>
	    </form></div>
		</div><br />
		
		
		                 <?php
 include('config.php');	
if(isset($_POST['edit3'])){ 
if(isset($_POST['old_pass'])){
$old = $_POST['old_pass'];}
if(isset($_POST['password'])){
$new = $_POST['password'];}
 {
 $oldpass = $rows['password'];
 if($old !=  $oldpass){
$error = "Password Incorrect...";
}

if($old ==  $oldpass) {
if (empty($error)) {
$sql3 = "UPDATE members SET password='$new' WHERE id='".$_SESSION['SESS_MEMBER_ID']."'";
$result3 = mysql_query($sql3);
}

// if successful redirect to delete_multiple.php 
if($result3){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=mero_profile.php\">Passoword changes ";
}
}
}

if (empty($error)) { $error = "Password updated"; }

}

?>
		                             
		
		
		
		
		<div id="box1">
					<legend>Accoutn info update</legend>					<div id="edit" style="padding-left: 635px; padding:10px; background: #663399; margin-left:635px; font-weight:bold; cursor:pointer;"><div class="button follow"><a>Edit</a></div></div>
					<div id="cancel1" style="display:none; background:#FF0000; margin-left:635px; font-weight:bold; cursor:pointer;"><a>Cancel</a></div>

					<div id="form01">
					<span style="color:#222; font-weight:bold;"><div id="show">FirstName :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['fname'])){echo $rows['fname'];print'</font>'; }else{echo'<font color="red">Whats Your Name ?</font>';}?> </span><span id="info" style="margin-left: 61px;"></span></div><br />
					
					<span style="color:#222; font-weight:bold;"><div id="show">LastName :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['fname'])){echo $rows['lname'];print'</font>'; }else{echo'<font color="red">Whats Your SurName ?</font>';}?> </span><span id="info" style="margin-left: 61px;"></span></div><br />
					<span style="color:#222; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><div id="show">Address :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['address'])){echo $rows['address'];print'</font>'; }else{echo'<font color="red">Where do you live?</font>';}?> </span><span id="info" style="margin-left: 47px;"></span></div><br />
					
					<span style="color:#222;; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><div id="show">Hometown :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['city'])){echo $rows['city'];print'</font>'; }else{echo'<font color="red">Which city?</font>';}?> </span><span id="info" style="margin-left: 30px;"></span></div><br />
					
				<span style="color:#222;; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><div id="show">Contact No. :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['conatact'])){echo $rows['contact'];print'</font>'; }else{echo'<font color="red">What is your contact number?</font>';}?> </span><span id="info" style="margin-left: 25px;"></span></div><br />
					<span style="color:#222; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';?><div id="show">Email :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['email'])){echo $rows['email'];print'</font>'; }else{echo'<font color="red">What is email?</font>';}?> </span><span id="uu" style="margin-left: 64px;"></span></div><br />
					<span style="color:#222; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><div id="show">Birthdate :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['bday'])){echo $rows['bday'];print'</font>'; }else{echo'<font color="red">Provide your birthday?</font>';}?> </span><span id="info" style="margin-left: 39px;"></span></div><br />
					<span style="color:#222; font-weight:bold;"><?php print'&nbsp;';?><div id="show">Gender <?php print'&nbsp;';?>:<?php print '<font color="brown">'; if (!empty($rows['gender'])){echo $rows['gender'];print'</font>'; }else{echo'<font color="red">Your sex?</font>';}?> </span><span id="info" style="margin-left: 53px;"></span></div><br />
				
					<span style="color:#222;; font-weight:bold;"><?php print'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?><div id="show">Relationship :<?php print'&nbsp;&nbsp;&nbsp;';?><?php print '<font color="brown">'; if (!empty($rows['relation'])){echo $rows['relation'];print'</font>'; }else{echo'<font color="red">Are single,In Relation,married or else?</font>';}?> </span><span id="info" style="margin-left: 20px;"></span></div><br /></div>
					
<div id="forms" style="display:none;">


                     

					<form id="form1" method="post" action="mero_profile.php">
						
						<p>
						
							<label for="text_field">Firstname:</label>
					  <div id="entry-text">
							<input type="text"  size="35" height="40"id="cap" name="firstname" value="<?php echo $fname; ?>"/></div>
					  </p>

						<p>
							<label for="text_field">Lastname:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="lastname"   value="<?php echo $rows['lname'] ?>"/></div>
						</p>
						<p><label for="text_field">Address:</label>
					  <div id="entry-text">
							 <input type="text" id="cap" name="address"   value="<?php echo $rows['address'] ?>" /></div>
						</p>
						<p><label for="text_field">Hometown:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="hometown"   value="<?php echo $rows['city'] ?>" /></p></div>
						<p>
						  <label for="text_field">Nick Name:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="contact_no"   value="<?php  echo $rows['contact'] ?>" /></div>
						<p><label for="text_field">Email:</label>
						<div id="entry-text">
							 <input type="text" name="email" id="username" value="<?php echo $rows['email'] ?>" /></div>
						</p>
						<p><label for="text_field">Birthdate:</label>
					  <div id="entry-text">
							 <select class="" style="width: 100px;" name="birthday_month" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, &quot;birthday_day&quot;, &quot;birthday_year&quot;);});">
                                  <option selected="selected"><?php //echo $display['b_month'] ?></option>
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
                        </select>
                                <select name="birthday_day" style="width: 100px;"  onchange="bagofholding" autocomplete="on">
                                  <option selected="selected"><?php //echo $rows['bday'] ?></option>
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
                                </select>
                                <select name="birthday_year" style="width: 100px;" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});" autocomplete="on">
                                  <option selected="selected"><?php //echo $display['b_year'] ?></option>
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
                                </select></div>
						</p>
						<p><label for="text_field">Gender:</label>
					  <div id="entry-text">
							 <select name="gender" id="drop cap">
                                <option selected="selected"><?php echo $rows['gender'] ?></option>
                                <option value="-1">-Select Gender-</option>
                                <option>Female</option>
                                <option>Male</option>
                          </select></div>
						</p>
						<p><label for="text_field">Relationship:</label>
						<div id="entry-text">
							 <select name="relationship" id="drop cap">
                                <option selected="selected"><?php echo $rows['relation'] ?></option>
                                <option value="-1">-Select Status-</option>
                                <option>Single</option>
                                <option>In a relationship</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Seperated</option>
                          </select>
                      </div>
						</p><p id="but"><br />
							<input class="button follow" value="Submit" type="submit" name="edit1"onclick="alert('change updated!')"/>
							<input class="button" value="Clear" type="reset" />
						</p>
						
					</form></div>
			</div>
				
				
			
			
			
			
			
			
			
				
				<br /><div id="box2">
				<legend>Education, Interest and Entertainment</legend>
				<div id="edit2" style="padding-left: 635px; padding:10px; background: #663399; margin-left:635px; font-weight:bold; cursor:pointer;"><a>Edit</a></div>
				<div id="cancel2" style="display:none; cursor:pointer; margin-left:600px; background:#FF0000; padding-left:7px; padding-right:7px;
				padding-top:7px; padding-bottom:7px;"><a>Cancel</a></div>

					<div id="form02">
					<?php $high = $rows['school'];
					if($high != ""){
					echo '<span style="color:#222; font-weight:bold;"><div id="show1">High School :</span><span id="info" style="margin-left: 23px;">' .$high . '</span><br /></div>'; }echo'<br>'; ?>
					<?php $college = $rows['college'];
					if($college != ""){
					echo '<span style="color:#222; font-weight:bold;"><div id="show1">College :</span><span id="info" style="margin-left: 55px;">' . $college . '</span><br /> </div>'; }echo'<br>';?>
					<?php $interest = $rows['interest'];
					if($interest != ""){
					echo '<span style="color:#222; font-weight:bold;"><div id="show1">Interests :</span><span id="info" style="margin-left: 45px;">' . $interest .'</span><br /></div>'; }echo'<br>'; ?>
					<?php $aboutme = $rows['aboutme'];
					if($aboutme != ""){
					echo '<span style="color:#222; font-weight:bold;"><div id="show1">About You :</span><span id="info" style="margin-left: 34px;">' . $aboutme. '</span><br /></div>'; } echo'<br>';?></div>
<div id="forms2" style="display:none;">
					<form id="form1" method="post" action="mero_profile.php">
						<p><label for="text_field">High School:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="high_school" height="40" size="30"   value="<?php //echo $rows['school']; ?>" /></div>
						</p>
						<p><label for="text_field">College:<?php echo $rows['college'] ;?></label>
						<div id="entry-text">
						 <input type="text" id="cap" name="college"   value="<?php // echo $rows['college']; ?>" /></div>
						</p>
				<p><label for="text_field">Interests:<?php echo $rows['interest'] ;?></label>
					  <div id="entry-text">
						<input type="text" id="cap" name="interest" value="<?php //echo $rows['interest'] ;?>" /></div>
</p>				
						<p>
						<label for="text_field">About You:<?php //echo $rows['aboutme'] ;?></label>
						<div id="entry-text">
						 <input type="text" id="cap" name="aboutme"   value="<?php echo $rows['aboutme']; ?>" /></div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit2" onclick="alert('change updated!')"/>
							<input class="button" value="Clear" type="reset" />
						</p>
		</form></div>
				
		  </div>	</div><?php }?>
		  
		  </center>
		  
		  
		  

		  <style type="text/css">
		  body{
	
		  }
		  #box{
		  box-shadow:0px,0px,10px rgba(0,0,0,0.2);
	background: #FFF ;
	
width:700px;
	min-height:50px;
	height:auto;
	margin-left:300px;
	padding:10px; 
	border: solid 1px #cbcbcb;
	 background-color: #FFF;
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;
	text-align:center;
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	padding:30px;


	
	}
	#box1{
		  box-shadow:0px,0px,10px rgba(0,0,0,0.2);
	background: #FFF ;width:700px;
	min-height:50px;margin-left:300px;
	height:auto;
	padding:10px; 
	border: solid 1px #cbcbcb;
	 background-color: #FFF;
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;
	text-align:center;
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	padding:30px;
}
	#box2{
		  box-shadow:0px,0px,10px rgba(0,0,0,0.2);
	background: #FFF ;width:700px;
	min-height:50px;
	margin-left:300px;
	height:auto;
	padding:10px; 
	border: solid 1px #cbcbcb;
	 background-color: #FFF;
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;
	text-align:center;
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	padding:30px;
}


.button follow{
    text-align: center;
    background-origin: padding-box;
    background-size: auto;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-style: solid;
    border-left-width: 1px;
    border-right-style: solid;
    border-right-width: 1px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-top-style: solid;
    border-top-width: 1px;
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 20px;
    font-style: normal;
    font-variant: normal;
    font-weight: bold;
    line-height: 23px;
    outline-color: rgb(255, 255, 255);
    outline-style: none;
    outline-width: 0px;
    text-decoration: none;
    text-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 0px;
    vertical-align: middle;
    padding: 15px 30px 15px 30px;
    zoom: 1;
    width:80px;
}



follow:hover,follow:active {
    background: linear-gradient(#008aea, #024dcf);
    border-color: #0055a7;
}
#show{
 box-shadow:0px,0px,1px rgba(0,0,0,0.2);
	background: #FFF ;width:500px;
	margin-left:100px;
	min-height:10px;
	height:auto;
 
	border: solid 1px #cbcbcb;
	 background-color: #FFF;
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	cursor:pointer;



}
#show:hover{
background: #0066FF;
color: #FFF;
}
		#show1{
		
		 box-shadow:0px,0px,1px rgba(0,0,0,0.2);
	background: #006600 ;width:500px;
	color:#FFFFFF;
	margin-left:100px;
	min-height:20px;
	height:auto;
 
	border: solid 1px #cbcbcb;
	
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	cursor:pointer;

		
		}
		
		#show1:hover{
		background:#FFFFFF;
		color:#FF0000;
		}
		
		
		
		  </style>
		  <!-- Modal -->
<div id="about" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Kingsfields Express Inn About</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
  </div>
</div><!--Modal end -->
 <link href="pop from header/admin/css/bootstrap.css" rel="stylesheet">
    <link href="pop from header/admin/css/bootstrap-responsive.css" rel="stylesheet">
    
     <!-- Placed at the end of the document so the pages load faster -->
    <script src="pop from header/admin/js/jquery.js"></script>
    <script src="pop from header/admin/js/bootstrap-transition.js"></script>
    <script src="pop from header/admin/js/bootstrap-alert.js"></script>
    <script src="pop from header/admin/js/bootstrap-modal.js"></script>
    <script src="pop from header/admin/js/bootstrap-dropdown.js"></script>
    <script src="pop from header/admin/js/bootstrap-scrollspy.js"></script>
    <script src="pop from header/admin/js/bootstrap-tab.js"></script>
    <script src="pop from header/admin/js/bootstrap-tooltip.js"></script>
    <script src="pop from header/admin/js/bootstrap-popover.js"></script>
    <script src="admin/js/bootstrap-button.js"></script>
    <script src="pop from header/admin/js/bootstrap-collapse.js"></script>
    <script src="pop from header/admin/js/bootstrap-carousel.js"></script>
    <script src="pop from header/admin/js/bootstrap-typeahead.js"></script>
   
<?php  
 include('config.php');	
 	//include'auth.php';

 if(isset($_POST['edit1'])){ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];
$hometown=$_POST['hometown'];
//$email = $_POST['email'];
$birthdate = ($_POST['birthday_month'] . "/" . $_POST['birthday_day']. "/" . $_POST['birthday_year'] );
//$b_month = $_POST['birthday_month'];
//$b_day = $_POST['birthday_day'];
//$b_year = $_POST['birthday_year'];
$gender = $_POST['gender'];
$relationship = $_POST['relationship'];

//$hometown = $_POST['hometown']; 

 
 		
				$session=$_SESSION['SESS_MEMBER_ID'];
					
					
								
				$up= mysql_query("update members set fname='$firstname',lname='$lastname',address='$address',contact='$contact_no',relation='$relationship',city='$hometown',bday='$birthdate' where id='$session'");
			
}
?>

<?php  

 include('config.php');	

//	$session=$_SESSION['SESS_MEMBER_ID'];

if(isset($_POST['edit2'])){ 
$college = $_POST['college'];
$high_school = $_POST['high_school'];
//$quote =  $_POST['quote'];
$aboutme = $_POST['aboutme'];
$interest = $_POST['interest']; 

$sql2 = mysql_query("update members set interest='$interest',  college='$college', school='$high_school', aboutme='$aboutme'  where id='".$_SESSION['SESS_MEMBER_ID']."'");

}


?>
<?php  include'fotter.php'; ?>