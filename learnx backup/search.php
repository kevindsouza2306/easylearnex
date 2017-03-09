<?php
include "imports/header.php";
include "imports/rheader.php";
include "imports/likefn.php";
include "imports/followfn.php";
?>
    
   
	<?php
	if(isset($_GET['submit'])){
	if(!empty($_GET['search'])) {
		
		$srch = $_GET['search'];
	}
	else
	{
		echo "you need to provide us with input";
	}
	}
	$search = explode(" ",$srch);
	foreach($search as $srch1)
	{
		if(strcasecmp($srch1, "when") == 0 || strcasecmp($srch1, "where") == 0 || strcasecmp($srch1, "is") == 0 || strcasecmp($srch1, "why") == 0 || strcasecmp($srch1, "what") == 0 || strcasecmp($srch1, "whom") == 0 || strcasecmp($srch1, "in") == 0 || strcasecmp($srch1, "to") == 0 || strcasecmp($srch1, "the") == 0 ||strcasecmp($srch1, "of") == 0 )
		{
			
		}
		else
		{
	$querry = mysqli_query($con,"SELECT * FROM questions WHERE `post` LIKE '%{$srch1}%'");
	while($row = mysqli_fetch_assoc($querry))
	{
	?>
	 <h2><a href="#"><?php echo $row['post']?> </a></h2>
	 <?php include "imports/followfn2.php";?>
 
	
  <?php include "imports/likefn2.php";?> 
	  
	  
	 <form action="dbProcess.php?option=answer"method="Post">
	<textarea placeholder="Post a Answer" style="height:30px" cols="50" name="answer"></textarea>
	<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>">
	<input type="submit" value="POST">
	
	</form>
	

      <p class="date"><?php echo$row['username']." "?><img src="images/more.gif" alt="" /> <a href="#">Read more...</a><img src="images/timeicon.gif" alt="" /> <?php echo$row['date_created']?></p>
    
	 <?php
	}
	}
	}
	include "imports/footer.php";

	  ?>
	  
    
