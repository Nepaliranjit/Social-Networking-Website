<?php
function smileFace($text){
$text=str_replace(":)","<img src='emotions/Ghelyon.gif'>",$text);
$text=str_replace(":(","<img src='emotions/springsmile.gif'>",$text);
$text=str_replace(":d","<img src='emotions/129fs916747.gif'>",$text);
return $text;
}
if(isset($_POST['mytext'])){
echo smileFace($_POST['mytext']);

}
?><form action="" method="post">
<input type="text" name="mytext">
<input type="submit" name="submit">
</form>