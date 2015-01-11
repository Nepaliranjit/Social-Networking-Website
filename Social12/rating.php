<?php
include('config.php');
include'auth.php';
?>

  <?php 
  $id="";
  if(isset($_GET['SESS_MEMBER_ID'])){
  $uid=$_GET['SESS_MEMBER_ID'];
  if($uid){
  $get_likes=mysql_query("select * from likes where uid='$uid'");
  if(mysql_num_rows($get_likes)==1){
  $get=mysql_fetch_assoc($get_likes);
  $uid=$get['SESS_MEMBER_ID'];
  $total_likes=$get['total_likes'];
 // $total_likes=$total_likes + 1;
  echo $total_likes;
  echo $uid;
  
  }
 // $total_likes="";
  if(isset($_POST['likebutton_'])){
   $total_likes=$total_likes + 1;
   $like=mysql_query("update likes set total_likes='$total_likes' where uid='$uid' "); 
    // $total_likes=$total_likes + 1;
	  //echo"<br>". $total_likes;
	   // echo"<br>". $total_likes++;
   
   
   }
   }
   }
 
?>
  
  
  <form action="rating.php?uid=<?php echo $uid;?>" method="post">
  <input type="hidden" name="uid" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>">
  <input type="submit" name="likebutton_<?php echo $id?>" value="like">