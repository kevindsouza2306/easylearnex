<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Learnex</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css" media="all">
@import "style.css";
</style>
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript">
$(function() {
    $('.like-button').click(function(){
        var obj = $(this);
        if( obj.data('liked') ){
            obj.data('liked', false);
            obj.html('Like');
        }
        else{
            obj.data('liked', true);
            obj.html('Unlike');
        }
    });
});
</script> 

</head>
<body>
<div class="content">
  <div class="rside">
  <?php
			include "core/init.php";

		
		if($_SESSION['login'] == 'TRUE')
		{		
		?>
   
	
	
	<li style="transform:uppercase">
	<div class = "dd">
	
	<a><?php echo "Hieee... ".$_SESSION['user_name'];?></a>
				
				<ul>									
				<li><a href="profile.php">Profile</a></li>									
				<li><a href="setting.php">Setting</a></li>	
				<li><a href="logout.php">Logout</a></li>				
				</ul>
				</div>
			</li>
			<?php
		}
else{	
			?>
			 <div class="topmenu"></div>
    <div class="loginbox">
      <div class="padding">
        <form action="dbProcess.php?option=login"method="Post">
          Login <br />
          <input type="text" name="User" value=""  />
          <br />
          Password <br />
          <input type="password" name="Pass" value=""  />
          <br />
          <br />
          <input type="submit" value="Login"  />
        &nbsp;
		   <a href="rege2.php"><input type="button"  value="Register"/></a>
          <br />
        </form>
      </div>
    </div>
            
			<?php
    }
?>