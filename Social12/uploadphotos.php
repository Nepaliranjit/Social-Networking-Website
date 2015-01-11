<?php
				  if (isset($_GET['id']))
	{
	include('config.php');
		
		$id=$_GET['id'];
	echo '<form action="upload-exec.php" method="post" enctype="multipart/form-data">';
			echo '<input type="hidden" name="uloadedby" value="'. $_GET['id'] .'">';
			echo 'Select Image';
			echo '<br>';
			echo '<input type="file" name="image">'.'<br>';
			echo '<input type="submit" value="Upload">';
	echo '</form>';
			}
			?>
			