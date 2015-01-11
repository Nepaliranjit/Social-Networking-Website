<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>jQuery News Updates</title>

<script type="text/javascript" src="jquery-1.10.2.min.js"></script>

<script>

$(document).ready(function(){

	$('.send').click(function(){

		var name=$('#name').val();
		var mess=$('#mess').val();
	
		
		if(name==""){
			
			alert('enter your name');
			
		}else if(mess==""){
			
			alert('enter your message');
			
		}else{

			var messdata= "name="+name+"&mess="+mess;
			
			
			$("#loader").show();
			$("#loader").fadeIn(400).html('<img src="loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading updates</span>');
			
			$('.send').css({ "width": "82px", "cursor": "wait" });
			$('.send').text('Tweeting wait..');
			
			$.ajax({
				
				type:"post",
				data:messdata,
				url:"sendmessage.php",
				cache:false,
				success:function(msg){

					$(".forms1").val('');
					$("#loader").hide();
					$("ul#amsalert").prepend(msg);
					$("ul#amsalert li:first").slideDown(500);
					$('.send').css({ "width": "40px", "cursor": "pointer" });
					$('.send').text('Tweet');

				}
				
			});
			
			
			
		}
	});
	
});

</script>

<style>

body{ font-family:Verdana, Geneva, sans-serif; color:#000; font-size:11px; background-color:#FFF; margin:0; padding:0;}

.lessoncup{width:300px; height:auto;border:solid #6895CC 1px;-webkit-box-shadow: 0 2px 5px #666;
box-shadow: 0 2px 5px #666; padding:10px;font-family:Arial, Helvetica, sans-serif; font-size:11px; margin:50px 0 0 400px; float:left;}

.messages{width:250px; height:638px; overflow:hidden;border:solid #8CACDD;font-family:Arial, Helvetica, sans-serif;font-size:11px; float:right; border-width:0 0 1px 1px;}

#loader{font-size:12px;display:none; margin:0 auto; width:112px; height:20px; padding:10px;}

#amsalert{ color:#fff; padding:0;list-style:none; margin:0; padding-left:1px;}

#amsalert li{ background-color:#6895CC; margin-top:1px; padding:10px; display:none; cursor:pointer;}

#amsalert li:hover{ background-color:#4E65C0; cursor:pointer;}

#msalert{ color:#fff; padding:0;list-style:none; margin:0; padding-left:1px;}

#msalert li{ background-color:#6895CC; margin-top:1px; padding:10px;}

#msalert li:hover{ background-color:#4E65C0; cursor:pointer;}

#mname{ color:#FF0; font-weight:bold;}

.ul{ margin:0; padding:0; list-style:none;}

.ul li{ padding:10px; padding-bottom:0; font-size:12px; color:#000;}

.send{ background-color:#6895CC; border:none; border-radius:5px; padding:10px; width:40px; cursor:pointer; color:#fff;}

.send:hover{ background-color:#4E65C0;}

.forms1{color:#333;padding:10px; width:200px; border:solid #6895CC 1px; font-size:14px; resize:none; margin:5px 0 5px 0; outline:none;border-radius:5px;}

#formbox{width:240px; height:auto;margin:0 auto;}



</style>

</head>

<body>

<div class="lessoncup">
<div id="formbox">

    <ul class="ul">
     <!-- <li> <span> Name:</span><br/>
        <input name="name" type="text" id="name" class="forms1" placeholder="name">
      </li>
      <li>Message<span>:</span><br/>
        <textarea name="mess" class="forms1" id="mess" placeholder="enter message"></textarea>
    -->  </li>
      
      <li style="margin-top:5px;">
        <div class="send">Tweet</div>
      </li>
    </ul>
  </div>
</div>

<div class="messages">
<div id="loader"></div>
<ul id="amsalert">

</ul>
<?php //include("messagealerts.php")?>
</div>



</body>
</html>