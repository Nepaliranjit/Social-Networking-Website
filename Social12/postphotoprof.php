<?php
include('config.php');





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"postphoto/" . $_FILES["image"]["name"]);
			
			$location="postphoto/" . $_FILES["image"]["name"];
			$from=$_POST['from'];
			$to=$_POST['to'];
			$time=time();
			$photos='photos';
			
			if(!$update=mysql_query("INSERT INTO comment(commentid, content, name, pakadtoan, created, postcat)VALUES('$from', '$location', '$from', '$to', '$time', '$photos')")) {
				echo mysql_error();
				
				
			}
			else{
			
			header("location: profile.php?id=$to");
			exit();
			}
			}
	}


?>