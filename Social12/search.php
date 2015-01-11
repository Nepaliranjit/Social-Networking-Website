<?php
include('config.php');
if($_POST)
{
$q=$_POST['search'];
//$check=mysql_query("select *  from members where search_result='yes'");
//if($check){
//if($q){
$sql_res=mysql_query("select id,fname,lname,email,address,city,work,gender,profilepic from members where email like '%$q%'or fname like '%$q%'
or lname like '%$q%'or address like '%$q%' or city like '%$q%'or  work like'%$q%'or  gender like'%$q%'and search_result='yes' LIMIT 6");

//}elseif($q){

//$sql_res=mysql_query("select id,fname,lname,email,address,city,work,profilepic from members where fname like '%$q%' and search_result='yes' order by id LIMIT 6");
//}else{
//$sql_res=mysql_query("select id,fname,lname,email,address,city,work,profilepic from members where lname like '%$q%' and search_result='yes' order by id LIMIT 6");
//}

$check_user=mysql_num_rows($sql_res);
while($row=mysql_fetch_array($sql_res))
{
$username=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$address=$row['address'];
$city=$row['city'];
$works=$row['work'];
$gender=$row['gender'];
$profile_pic=$row['profilepic'];
$b_username='<strong>'.$q.'</strong>';
$b_lname='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$b_address='<strong>'.$q.'</strong>';
$b_city='<strong>'.$q.'</strong>';
$b_works='<strong>'.$q.'</strong>';
$b_gender='<strong>'.$q.'</strong>';

$final_username = str_ireplace($q, $b_username, $username);
$final_lastname=str_ireplace($q,$b_lname,$lname);
$final_email = str_ireplace($q, $b_email, $email);
$final_address=str_ireplace($q,$b_address,$address);
$final_city=str_ireplace($q,$b_city,$city);
$final_works=str_ireplace($q,$b_works,$works);
$final_gender=str_ireplace($q,$b_gender,$gender);
//$items[] = array('fname' =>$final_username , 'lname' => $final_lastname, 'email' => $final_email, 'address' => $final_address, 'gender' => $final_gender,'city'=>$final_city,'work'=>$final_works);


//echo ($items);

?>
<div class="show" align="left">
<?php 
if(empty($profile_pic)){

 echo'<a href=profile.php?id='.$row['id'] .' title="Click to view My profile">'.'<img src="photos/avatar.png"style="max-width: 80px;max-width: 50px";margin-top:-10px;">';
 }
?>

  <?php echo'<a href=profile.php?id='.$row['id'] .' title="Click to view My profile">'.'<img src="'.$row['profilepic'].'" style="max-width: 80px;max-width: 50px";margin-top:-10px;"> ';'.</a>.'?>
  
  <span class="name" style=" float:right;"><?php echo $final_username; ?>&nbsp;<?php echo $lname; ?>&nbsp;<br /><font color="#ccc"><?php echo $address; print',';?><?php echo $city; ?><?php //echo $works; ?></font><br/><br />
 </div>

<?php
}


}

?><img src="photos/add.gif"><br />
 <a href="members.php" style="font-size:18px; font-family:'Courier New', Courier, monospace; font-weight:bold; color:#FFFFFF; text-decoration:none;
 background:#0099CC; padding-right:108px; padding-left:106px;">
 View more result</a>