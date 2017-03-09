<?php
include "imports/header.php";
include "imports/rheader.php";
include "imports/likefn.php";
include "imports/followfn.php";
?>
    
   
	<?php
	$querry = mysqli_query($con,"SELECT DISTINCT questions.p_id, questions.user_id, questions.username, questions.date_created, questions.post, `like`.post_id, `like`.user_id,`like`.u_name FROM questions, `like` WHERE questions.p_id = `like`.post_id AND `like`.user_id='".$_SESSION['u_id']."' ORDER BY questions.date_created DESC,questions.date_created  DESC");
	while($row = mysqli_fetch_assoc($querry))
	{
	?>
	 <h2><a href="#"><?php echo $row['post']?> </a></h2>
	 <?php include "imports/followfn2.php";?>
 
	<?php
	 $querry1 = mysqli_query($con,"SELECT answers.*, `like`.* FROM answers, `like` WHERE answers.c_id = `like`.c_id AND `like`.user_id='".$_SESSION['u_id']."' AND answers.post_id='".$row['p_id']."'");
	while($row1 = mysqli_fetch_assoc($querry1))
	{
		 
	 ?>

	  <b><?php echo $row1['u_name']?></b>
	  
	  <br>&nbsp&nbsp&nbsp&nbsp<?php echo $row1['comments'];
	 
	  	 $querry2 = mysqli_query($con,"SELECT * FROM `like` WHERE '".$row1['c_id']."' = like.c_id AND '".$_SESSION['u_id']."' = like.user_id");
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
	<button type="submit" name="sublike" value="sublike"> <img src="images/like.png" alt="" /><?php echo $like?></button>
	 </form>
	 </div>
	  <br>
	  <?php
	}
	  ?>
	  
	 <form action="dbProcess.php?option=answer"method="Post">
	<textarea placeholder="Post a Answer" style="height:30px" cols="50" name="answer"></textarea>
	<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>">
	<input type="submit" value="POST">
	
	</form>
	

      <p class="date"><?php echo$row['username']." "?><img src="images/more.gif" alt="" /> <a href="#">Read more...</a> <img src="images/timeicon.gif" alt="" /> <?php echo $row['date_created']?></p>
    
	 <?php
	}
	include "imports/footer.php";
	  ?>
	  
    