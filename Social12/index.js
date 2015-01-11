// JavaScript Document
$(document).ready(function(){
$('.button').click(function(){;	
var simley=$(this).attr('smiley');
var message=$('#content').val();
$('#content').val(message +''+simley+'');
						   
						   
						   });


$('#content').keyup(function(e){
	if(e.keyCode==13){
	var message=$(this).val();
    $.post('replace.php',{message:message},function(date){
		
		$('#display_message').append(date + '<br/><br/>');
													
});
	}
});
});
