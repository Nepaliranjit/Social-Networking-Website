<?php session_start();
include ('config.php');
// declare post fields
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	

$email_address = trim(strip_tags($_POST['email']));

}else{
	if(isset($_POST["page_login"]) && !empty($_POST["page_login"])){
		$email_address = trim(strip_tags($_POST['email1']));
$password = trim(strip_tags($_POST['password1']));
		}
	}
//$post_autologin = $_POST['autologin'];

$admin = mysql_query("insert into user(email) values('".$email_address."')");

if($admin){
	
$_SESSION['email'] = $email_address;

?>
<script>window.location='status.php'</script>
<?php
}
else
{
echo '<div id="error_notification" style="margin-left:10px; color:red;">Invalid account</div>';
}
?>