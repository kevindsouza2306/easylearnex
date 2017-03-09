<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My form - Formoid online form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="rege2_files/formoid1/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="rege2_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="dbProcess.php?option=register"><div class="title"><h2>My form</h2></div>
	<div class="element-name"><label class="title"></label><span class="nameFirst">
	<input placeholder=" Firstname" type="text" size="8" name="first" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Lastname" type="text" size="14" name="last" /><span class="icon-place"></span></span></div>
	<div class="element-select" title="occupation"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="Student">Student</option>
		<option value="Teacher">Teacher</option>
		<option value="Working">Working</option>
		<option value="Entrepreneur">Entrepreneur</option>
		<option value="Freelancer">Freelancer</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-url"><label class="title"></label><div class="item-cont"><input class="large" type="url" name="url"  placeholder="Website"/><span class="icon-place"></span></div></div>
	<div class="element-email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-password"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password" value="" required="required" placeholder="Password"/><span class="icon-place"></span></div></div>
	<div class="element-password"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password1" value="" required="required" placeholder="Retype-Password"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">online form</a> Formoid.com 2.9</p><script type="text/javascript" src="rege2_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
