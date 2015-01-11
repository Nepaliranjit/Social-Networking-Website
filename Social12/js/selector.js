// JavaScript Document
$(document).ready(function(){
$('#btn').click(function(){
$('#user').val().length;/*you can also remove this line*/						 
var username=$('#user').val();
$('#pass').val().length;/*you can also remove this line*/
var password=$('#pass').val();
if(username==""){
	$('.error').text("please, enter username");
}
else if(password==""){
$('.error').text("please, enter your password");	
}
	
						 
						 
						 });
});  