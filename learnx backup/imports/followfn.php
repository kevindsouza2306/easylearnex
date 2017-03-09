<?php
if(isset($_POST['subfollow']))
	$option1 = $_POST['follow'];
{
	 

if($option1 === 'Follow up')
{
	if($_SESSION['login'] == 'TRUE')  

	 {
	$varCurrDate = date("d/m/y : H:i:s", time()) ;

   echo $_POST['p_id'];
   echo $option1;
	
 $follow = "Unfollow";
   $queryfl = "INSERT INTO `follow` (`p_id`, `user_id`, `username`, `date_created`) VALUES ('" . $_POST['p_id'] . "','" . $_SESSION['u_id'] . "','" . $_SESSION['user_name'] . "','" . $varCurrDate . "')";
    $result = mysqli_query($con,$queryfl);
	$queryfl1 ="UPDATE `questions` SET following = following + 1 WHERE p_id='" . $_POST["p_id"] . "'";
	$result = mysqli_query($con,$queryfl1);
		   
header(0);
}
	 else{
header("Location:index.php?message1=Please Login To Follow....");
	 	//echo "<h3>Please Login To Follow....</h3>";
	 }
  	
}
elseif($option1 === 'Unfollow')
{
	if($_SESSION['login'] == 'TRUE')  

	 {
	$quyfl = "DELETE FROM `follow` WHERE user_id = '" . $_SESSION['u_id'] . "' and p_id = '" . $_POST["p_id"] . "'";
	 $result = mysqli_query($con,$quyfl);
	 $queryul1 ="UPDATE `questions` SET following = following - 1 WHERE p_id='" . $_POST["p_id"] . "' and following > 0";
	 $result = mysqli_query($con,$queryul1);
	$follow = "Follow up";		
	
header(0);
}
else{
header("Location:index.php?message1=Please Login To Follow....");
	 	//echo "<h3>Please Login To Follow....</h3>";
	 }
	 }
	 

}

?>