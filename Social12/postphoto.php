<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "browse image";
	}else{
	$file=$_FILES['image']['tmp_name'];
	//$size=$_FILES['image']['size'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	 $image_info = getimagesize($_FILES["image"]["tmp_name"]);
   
        
	      
							
	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
		
		      //  require_once('class.ImageFilter.php');
						  //  $filter = new ImageFilter;
						    //$score = $filter->GetScore($_FILES['photoimg']['tmp_name']);
							
							//if(isset($score))
							//{
								//if($score >= 40)
								//{
									// echo "Image scored ".$score."%, It seems that you have uploaded a nude picture :-(";
								//}
								  //else
							   //{
							
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"postphoto/" . $_FILES["image"]["name"]);
			
			$location="postphoto/" . $_FILES["image"]["name"];
			$from=$_POST['from'];
			$to=$_POST['to'];
			$time=time();
			$photos='photos';
			$comment=$_POST['comment'];
		
			
			if(!$update=mysql_query("INSERT INTO comment(commentid, content, name, poster, created, postcat,comment)VALUES('$from', '$location', '$from', '$to', '$time', '$photos','$comment')")) {
				echo mysql_error();
				
				
			}
			else{
			
			header("location:status.php");
			exit();
			}  
			}
	}

//}}
					  
?>