<?php include'auth.php';?>
<?php

//$nombre=$_POST['nombre'];
$person=$_POST['person'];
$comment=$_POST['content'];
$upby=$_POST['upby'];
$nombrefoto=$_FILES['foto']['name'];
$ruta=$_FILES['foto']['tmp_name'];
$destino =  "fotos/".$nombrefoto;
copy($ruta,$destino);

 mysql_connect("localhost","root");
  mysql_select_db("socialweb_ranjit.sql");  
 mysql_query("insert into photocomment(image,person,commentid,comment) values('$destino','$person','$upby','$comment')");
 header("Location:status.php");
 ?>