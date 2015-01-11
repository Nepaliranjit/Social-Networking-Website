<?php  
include'config.php';
include'auth.php';
?> 
<a href="status.php">Back</a>
<form action="privacy.php" method="post">
<select name="search" >
<option value="">Select options</option>
<option value="yes">Show my datails in search engine</option>
<option value="No">Donot show me in sarch engine</option>
</select>
<input type="submit" name="submit_bt" value="update">
</form>
            <hr>
			  <?php 
			  if(isset($_POST['submit_bt'])){
			  $search=$_POST['search'];
             $update=mysql_query("update members set search_result='$search' where id='".$_SESSION['SESS_MEMBER_ID']."'");
			
			 }
			 ?>
			 <form action="privacy.php" method="post">
  <select name="friends"  id="friends">
  <option value="">Select options</option>
  <option value="yes">Show me on members page</option>
  <option value="No">Donot Show me on members page</option>
  </select>
  <input type="submit" name="submit_btn" value="updates">
   </form>
          <?php 
		  include'config.php';
		   if(isset($_POST['submit_btn'])){
			  $friends=$_POST['friends'];
             $updates=mysql_query("update members set friends_condition=' $friends' where id='".$_SESSION['SESS_MEMBER_ID']."'");
			 }
			 ?>
			 