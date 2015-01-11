$(function(){
		//insert record
		$('#inserts').click(function(){
			var jcommentid = $('#commentids').val();
			var jsubcommentname = $('#subcommentnames').val();
			var jsubcommentcontent= $('#subcommentcontents').val();
			//var jcons = $('#cons').val();
			

			//syntax - $.post('filename', {data}, function(response){});
			$.post('subcomment.php',
			{action: "insert", commentid:jcommentid,subcommentname:jsubcommentname,subcommentcontent:jsubcommentcontent},
			function(res){
			$('#result').html(res);
			});
			});
		
	
		//show records
		
		
		//$('#show').click(function(){
			$.post('subcomment.php',{action: "show"},function(res){
				$('#result').html(res);
			//});		
		});
	});