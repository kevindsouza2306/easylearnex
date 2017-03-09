<?php
 ob_start(); 
 error_reporting(E_ALL ^ E_NOTICE); 
 session_start();
include 'core/init.php';

$varCurrDate = date("d/m/y : H:i:s", time()) ;
$varInsertBy = 'Web Interface';

$option = $_REQUEST['option'];


if($option=='add')
{

 if (isset($_GET["prod"]) && (int)$_GET["price"]>0) //add product to cart with productID=$add2cart
    {
       
        //$_SESSION['gids'] contains product IDs
        //$_SESSION['counts'] contains item quantities ($_SESSION['counts'][$i] corresponds to $_SESSION['gids'][$i])
        //$_SESSION['gids'][$i] == 0 means $i-element is 'empty' (does not refer to any product)
        if (!isset($_SESSION["prod"]))
        {
            $_SESSION["prod"] = array();
			$_SESSION["price"]= array();
            $_SESSION["counts"] = array();
        }
        //check for current product in visitor's shopping cart content
        $i=0;
        while ($i<count($_SESSION["prod"]) && $_SESSION["prod"][$i] != $_GET["prod"]) $i++;
        if ($i < count($_SESSION["prod"])) //increase current product's item quantity
        {
            $_SESSION["counts"][$i]++;
			
			
        }
        else //no such product in the cart - add it
        {
            $_SESSION["prod"][] = $_GET["prod"];
            $_SESSION["price"][] = $_GET["price"];
			$_SESSION["counts"][] = 1;
			
			
        }
    } 
	
	header("Location:".$_SERVER['HTTP_REFERER']);

     


}


if($option=='register')
{
$varFirstName = $_POST['first'];
$varLastName = $_POST['last'];
$varContactNo = htmlspecialchars($_REQUEST['contact']);
$varEmailId = htmlspecialchars($_REQUEST['email']);
$varAddress = htmlspecialchars($_REQUEST['select']);
$varUserName = htmlspecialchars($_REQUEST['radiobuttion']);
$varPassword = htmlspecialchars($_REQUEST['password']);


$varUserid = 0;






$query = "insert into userdetails (user_id,first_name,last_name,contact_no,email_id,address,user_name,password,insert_date,insert_by,update_date,update_by) values (".$varUserid.",'".$varFirstName."', '".$varLastName."', '".$varContactNo."','". $varEmailId."','".$varAddress."','".$varUserName."','".$varPassword."','".$varCurrDate."','".$varInsertBy."','".$varCurrDate."','".$varInsertBy."')";
$result=mysqli_query($con,$query);	
if(!$result)
{
  header("Location:index.php?rmsg=".mysql_error()."&fn=".$varFirstName."&ln=".$varLastName."&cno=".$varContactNo."&email=".$varEmailId."&add=".$varAddress."&pwd=".$varPasword);
}
 else
     {
		
		
		header("Location:index.php?message1=Thanks for registering. Please Login");
					 
      }
        


}






 if($option=='login')
  { 
    $varUserName = htmlspecialchars($_REQUEST['User']);
    $varPassword= htmlspecialchars($_REQUEST['Pass']);
	
	$varLoginDate = date("d/m/y : H:i:s", time()) ;
 
   $query="select u.* from userdetails u where  u.email_id = '".$varUserName."' and u.password = '".$varPassword."' ";
    
	$result=mysqli_query($con,$query);
		
		if(!$result)
		{
		  die('Invalid Query'.mysql_error());
		 }
		else
		{
		
		
		 if($row = @mysqli_fetch_assoc($result))
		 {
		 echo 'success';
		     
 	         $_SESSION['login'] =  'TRUE';
 	         $_SESSION['u_id'] =  $row['user_id'];
			  $_SESSION['user_id']=  $row['email_id'];
		     $_SESSION['user_name'] =  $row['first_name']. " ".$row['last_name'];
			 $_SESSION['last_login'] = $row['last_login'];
		   
		 
		  $query="update userdetails set  last_login = '" . $varLoginDate."' where user_id =".$row['user_id'] ;
 		   $result=mysqli_query($con,$query);
		   
		   	header("Location: index.php");
	      mysqli_query($con,"UPDATE `userdetails` SET `status` = 1 WHERE email_id='$varUserName'");
		  		    
		 }
		 else
		 {
		 	header("Location:index.php?message=Invalid Login Details");
		 }
	
	}

  }

  if($option=='questions')
  {
	  $varCurrDate = date("d/m/y : H:i:s", time()) ;

  if($_SESSION['login'] == 'TRUE')
		{
			
			if(empty($_POST['catogory'] ))
			{
				header("Location:index.php?message=You Need To Select Category");
				/* echo "<center><p style='color:red; font-size:30px'>You Need To Select Category</p>";
				echo "<br><a href='index.php'>BACK</a></center>"; */

			}
			elseif(empty($_POST['questions'] ))
			{
				header("Location:index.php?message=You Need To Enter Something");
				/* echo "<center><p style='color:red; font-size:30px'>You Need To Enter Something</p>";
				echo "<br><a href='index.php'>BACK</a></center>"; */
			}
			
			else{
			foreach($_POST['catogory'] as $chk1)
				{
				if($chk1 == "s&t")
				{
					$st = 1;
				}
				if($chk1 == "p")
				{
					$p = 1;
				}
				if($chk1 == "edu")
				{
					$edu = 1;
				}
				if($chk1 == "ent")
				{
					$ent = 1;
				}
				
				}
		$query1 = mysqli_query($con,"INSERT INTO questions (post,user_id,username,date_created,st,p,edu,ent) VALUES('".$_POST['questions']."','".$_SESSION['u_id']."','".$_SESSION['user_name']."','".$varCurrDate."','".$st."','".$p."','".$edu."','".$ent."')");
	
		header("Location:myques.php");
			}
		}
		else
		{
			header("Location:index.php?message=You Have To Login First");
		}
	  
	  
	  
	  
	  
  }
  
  
  if($option=='answer')
  {
	if(empty($_POST['answer'] ))
			{
				echo "Need Some Valid Answers";
			}
			else{
				
  if($_SESSION['login'] == 'TRUE')
		{
	 		mysqli_query($con,"INSERT INTO answers (post_id,comments,date_created,u_name,user_id) VALUES('".$_POST['p_id']."','".$_POST['answer']."','".$varCurrDate."','".$_SESSION['user_name']."','".$_SESSION['u_id']."')");
		    header("Location:myques.php");

		}
		else{
			echo "<center><p style='color:red; font-size:30px'>you need to login first</p><br>";
			echo "<a href='index.php'>BACK</a></center>";
		}
			
			}
	  
	  
  }

if($option=='setting')
{

if(!empty($_POST['fn']) || !empty($_POST['ln']) || !empty($_POST['oc']) || !empty($_POST['un']) || !empty($_POST['pw']) || !empty($_POST['rpw']))
{
 if ($_POST['pw'] == $_POST['rpw']) {
 	mysqli_query($con,"UPDATE userdetails first_name = '".$_POST['fn']."', last_name = '".$_POST['ln']."', address = '".$_POST['oc']."', email_id = '".$_POST['un']."', password = '".$_POST['pw']."' WHERE user_id = '".$_SESSION['u_id']."'");
  header("Location:setting.php");

 }
 else
 	echo "fghjkl";

}
}




?>