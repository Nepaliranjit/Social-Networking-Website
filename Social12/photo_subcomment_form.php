<link rel="stylesheet" href="main_statuspage.css" />
<link rel="stylesheet" href="style.css" />


<?php include'auth.php';
	
?>
<form name="form1" enctype="multipart/form-data" method="post" action="photo_subcomment_process.php">
  <label>

  <br>
  <label><div id="box">
  Choose Photo
 <input name="foto" type="file" id="foto"required>
 <input type="text" name="content" maxlength="12"data-location="right" data-trigger="focus" placeholder="write comment...."  width="320"/><br />
<input name="person" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
<input name="upby" type="hidden" value="<?php echo  $_GET['id'];  ?>">
  </label>
  <br>
  <label>
  <input type="submit" name="Submit" value="Submit" class="bt-com">
  </label>
</form></div>
 <?php
 mysql_connect("localhost","root");
 mysql_select_db("socialweb_ranjit.sql");  

?>

			
<style>


 input[type="text"]{
	margin: 0;
	height: 20px;
	padding: 5px;
	border: #d3d7dc 1px solid;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;
	background-color: #f9f9f9;
	color: #333;
	margin-bottom:5px;
	width:330px;
	height:30px;
}
.bt-com{
	display: inline;
	float: left;
	padding: 8px 10px; 
	border: #d9d9d9 1px solid;
	background-color: #fff;
	color: #404040;	cursor: pointer;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;
}
</style>