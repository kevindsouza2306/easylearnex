<?php
if(isset($_POST['sublike']))
	$option = $_POST['like'];
{
	 

if($option === 'Like')
{
	 if($_SESSION['login'] == 'TRUE')  

	 {
	$varCurrDate = date("d/m/y : H:i:s", time()) ;

   
	
 $like = "Unlike";
  $query9 = "INSERT INTO `like` (c_id, user_id, u_name, date_created, post_id) VALUES ('" . $_POST['c_id'] . "','" . $_SESSION['u_id'] . "','" . $_SESSION['user_name'] . "','" . $varCurrDate . "','" . $_POST['p_id'] . "')";
    $result = mysqli_query($con,$query9);
	$querylk ="UPDATE `answers` SET likes = likes + 1 WHERE c_id='" . $_POST["c_id"] . "'";
	$result = mysqli_query($con,$querylk);
		   
header(0);
	 }
	 header("Location:index.php?message1=Please Login To Like....");

	// else echo "<h3>Please Login To Like....</h3>";  	
}
elseif($option === 'Unlike')
{
	if($_SESSION['login'] == 'TRUE')  

	 {
	$quy = "DELETE FROM `like` WHERE user_id = '" . $_SESSION['u_id'] . "' and c_id = '" . $_POST["c_id"] . "'";
	 $result = mysqli_query($con,$quy);
	 $queryul ="UPDATE `answers` SET likes = likes - 1 WHERE c_id='" . $_POST["c_id"] . "' and likes > 0";
	 $result = mysqli_query($con,$queryul);
	$like = "Like";		
	
header(0);
	 }
	 else header("Location:index.php?message1=Please Login To Like....");

}


}

?>