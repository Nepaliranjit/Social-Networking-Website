<?php
	
	include('config.php');
		
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM members WHERE id = $id");

while($row = mysql_fetch_array($result))
  {
  echo "<img width=200 height=180 alt='Browse a picture' src='" . $row["profilepic"] . "'>";
    
  }
	echo '<form action="editpicexec.php" method="post" enctype="multipart/form-data">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	echo '<br>';
			echo '<input type="hidden" name="firstname" value="'. $_GET['id'] .'">';
			echo 'Select Image';
			echo '<br>';
			echo '<input type="file" name="image">'.'<br>';
			echo '<input type="submit" value="Upload">';
	echo '</form>';
			
			?>
			
