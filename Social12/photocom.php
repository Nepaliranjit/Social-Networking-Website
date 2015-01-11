<?php include'config.php';?>

             
			   </div>  <div id="loading" style="display:none;"><img src="photos/loader.gif" alt="" /><b>.........</b></div>
			   </form>
			   
               <form action="postphoto.php" method="post" enctype="multipart/form-data">
				<input name="from" type="hidden" value="<?php //echo $_SESSION['SESS_MEMBER_ID']; ?>">
				<input name="to" type="hidden" value="<?php //echo $_SESSION['SESS_MEMBER_ID']; ?>">
				
		<p class="ranjit_image" style=" margin-top:10px;margin-right:150px;">Upload photo</p>
			<div class="ranjit_choose" style="margin-top:-50px; ">
				<input type="file" name="image" style="padding:5px; border="1px;" ">&nbsp;&nbsp;

			             <input type="submit" value="Upload" style="padding:5px;">
			            
				</div>
				</form>