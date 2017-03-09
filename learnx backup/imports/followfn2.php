
	  	 <?php
	  	 $querry11 = mysqli_query($con,"SELECT * FROM `follow` WHERE '".$row['p_id']."' = follow.p_id AND '".$_SESSION['u_id']."' = follow.user_id");
		$rowcnt = mysqli_num_rows($querry11);
		if($rowcnt != 0)
		{
			$follow = "Unfollow";
		}
		else
		{
			$follow = "Follow up";
		} 
	  ?>
	   <div align = "right">
	<form action="" method="post" >
	<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>">
	<input type="hidden" name="follow" value="<?php echo $follow?>">
	<?php echo $row['following']." are following this"?>
	<button type="submit" name="subfollow" value="subfollow"> <img src="images/comment.gif" alt="" /><?php echo $follow?></button>
	 </form>
	 </div>
	  <br>
	