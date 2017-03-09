<?php
include "core/init.php";


$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['radio'];

			$_SESSION['type'] = $type;
			$_SESSION['username'] = $username;

	if ($type == 'student'){
	
	$query = mysql_query("SELECT * FROM Student_login WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	
	
	if ($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if ($username==$dbusername&&$password==$dbpassword)
		{
			
			//include "loginhome.php";
			 header("Location: loginhome.php");
              exit;
			
		}
		else
			echo "invalid password";

	}
	else{
		die("User Not Found");
	}

	}
	else if ($type == 'Company'){
		
		
		$query = mysql_query("SELECT * FROM company_login WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	
	
	if ($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if ($username==$dbusername&&$password==$dbpassword)
		{
			
              header("Location: loginhomecom.php");
              exit;
			
		}
		else
			echo "invalid password";

	}
	else{
		die("User Not Found");
	}
	}

    else if ($type == 'College'){
		
		
		$query = mysql_query("SELECT * FROM college_login WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	
	
	if ($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if ($username==$dbusername&&$password==$dbpassword)
		{
			
			 header("Location: loginhome.php");
              exit;
			
			
		}
		else
			echo "invalid password";

	}
	else{
		die("User Not Found");
	}
	}
	







?>



