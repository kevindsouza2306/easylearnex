<?php
	 $querry1 = mysqli_query($con,"SELECT * FROM answers WHERE '".$row['p_id']."' = answers.post_id ORDER BY likes DESC, likes DESC");
	while($row1 = mysqli_fetch_assoc($querry1))
	{
		 
	 ?>

	  <b><?php echo $row1['u_name']?></b>
	  
	  <br>&nbsp&nbsp&nbsp&nbsp<?php echo $row1['comments'];
	 
	  	 $querry2 = mysqli_query($con,"SELECT * FROM `like` WHERE '".$row1['c_id']."' = like.c_id AND '".$_SESSION['u_id']."' = like.user_id ");
		$rowcnt = mysqli_num_rows($querry2);
		if($rowcnt != 0)
		{
			$like = "Unlike";
		}
		else
		{
			$like = "Like";
		} 
	  ?>
	   <div align = "right">
	<form action="" method="post" >
	<input type="hidden" name="c_id" value="<?php echo $row1['c_id']?>">
	<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>">
	<input type="hidden" name="like" value="<?php echo $like?>">
	<?php echo $row1['likes']." liked this"?>
	<button type="submit" name="sublike" value="sublike"> <img src="images/like.png" alt="" /><?php echo $like?></button>
	 </form>
	 </div>
	  <br>
	  <?php
	}
	  ?>