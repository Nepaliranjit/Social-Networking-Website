<?php
include'config.php';
?>
<p class="ranjit_image" style=" margin-top:10px;margin-right:150px;">
<?php  
$id=$_GET['id']; 
$sqlPhoto=mysql_query("select * from comment where id='$id'");
while($rows=mysql_fetch_array($sqlPhoto)){
$views=$rows['views'];
echo'<center><img src="'.$rows["content"].'" style="weight:605px;max-height:560px; margin-left:10px; margin-top:10px;border:1px solid #000; padding: 0px; "></center>';


?></p>

<?php

  $newviews = $views + 1;
  $updateviews = mysql_query("UPDATE comment SET views='$newviews' WHERE id='$id'") or die(mysql_error());
}

?>