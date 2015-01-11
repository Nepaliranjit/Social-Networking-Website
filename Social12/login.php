<?php

	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	include('config.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	
	//Sanitize the POST values
	$a =mysql_escape_string( $_POST['username']);
	$password =mysql_escape_string (md5( $_POST['password1']));
	

	
	//Create query
	$qry="SELECT * FROM members WHERE email = '$a' AND password ='$password'";
	$result=mysql_query($qry);
	echo $qry;
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['fname'];
			$_SESSION['email']=$member['email'];
			header("location:status.php");
			exit();
		}else {
			//Login failed
			header("location:signup_in_socialweb.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>
<p>Redirecting...</p>