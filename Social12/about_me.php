<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>video sharing website</title>
<style>
body{ margin:0px; background:#fff; }
#bg_container{ height:600px; overflow:hidden; }
#bg{ width:100%; }
#content{ position:absolute; top:0px; padding:30px; color:#FFF; text-shadow:#000 2px 2px; }
</style>
</head>
<body>
<div id="bg_container">
  <video id="bg" src="data/users/videos/Wjecgdlf9ItTZH5lll.MP4" autoplay="true" loop="true" audio="true"></video><!-- muted="true"-->
</div>
<div id="container">

<div id="content">
<div class="typewrite">
  <h1>Hi,my name is Ranjit karki.I have created this Social network named"socialweb" one year ago(end of 2nd year) and today iam sharing with you.I have made home page public and repalce some of codes and photos because of large size,i found this directly effect the Degin of this site.I hope you are good in HTML/CSS AND you can make it looks attractive. </h1>
  <h2>i want one things from you :<br>leave a comment what changes you want</font&nbsp;>OR<br>Hit like&nbsp;OR<br>Follow me on facebook<br></h2>
  
  
  <h3><a href="http://www.facebook.com/ranjit.karki.140" target="_blank">Click Me </a></h3>

  </div>
  </div>
  
<!DOCTYPE html>
<html>
<head>
<script src="typewriter.js"></script>
<style>
.typewrite{
	font-size: 20px;
}
.typing-cursor{
	position: relative;
	display: inline-block;
	width: 8px;
	text-indent: -999em;
	background: #ccc;
}
#members{
background:#000000;
height:100px;
}
</style>
<script>
$(document).ready(function(){
//get the content
var content = $('.typewrite').html();
//find the length of the content
var contentLength = content.length;
var char = 0;
$('.typewrite').html('<span class="typing-cursor">|</span>');

//Here is the function
(function typeFunc() {   
	//dynamic delay to get the typewriting feel
    var typingSpeed = Math.round(Math.random() * 120) + 60;
    setTimeout(function() {
        char++;
        var type = content.substring(0, char);
		$('.typewrite').html(type + '<span class="typing-cursor">|</span>');
		//recursive
        typeFunc();
    }, typingSpeed);
}());
});
</script>

</body>
</html>
