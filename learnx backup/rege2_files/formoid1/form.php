<?php

define('EMAIL_FOR_REPORTS', 'kevindsouza2306@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>My form</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"></label><span class="nameFirst"><input placeholder=" Firstname" type="text" size="8" name="name[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Lastname" type="text" size="14" name="name[last]" /><span class="icon-place"></span></span></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="occupation"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="Student">Student</option>
		<option value="Student1">Student1</option>
		<option value="Student2">Student2</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-url<?php frmd_add_class("url"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="url" name="url"  placeholder="Website"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-password<?php frmd_add_class("password"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password" value="" required="required" placeholder="Password"/><span class="icon-place"></span></div></div>
	<div class="element-password<?php frmd_add_class("password1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password1" value="" required="required" placeholder="Retype-Password"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>