<head>
<style type="text/css" media="all">
@import "style.css";
</style>
<script type="text/javascript" src="register.js"></script>
</head>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">User Registration</h2>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form name="form" action="dbProcess.php?option=register">
       <div id="errorBox"></div>
        <input type="text" name="firstname" value="" placeholder="First Name"  class="input_name" >
        <input type="text" name="lastname" value="" placeholder="Last Name" class="input_name" >
         
      </div>
	  <div id="Re_email_form">
        <input type="text" name="enterEmail" value=""  placeholder="Occupation" class="input_Re_email">
      </div>
      <div id="email_form">
        <input type="text" name="email" value=""  placeholder="Your Email" class="input_email">
      </div>
      
      <div id="password_form">
        <input type="password" name="Password" value=""  placeholder="New Password" class="input_password">
      </div>
	   <div id="Re_Password">
        <input type="password" name="Password1" value=""  placeholder="Re-enter Password" class="input_Re_password">
      </div>
      <!--birthday details start-->
      <div>
        <h3 class="birthday_title">Birthday</h3>
      </div>
      <div>
        <select name="birthday_month" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_day" >
          <option value="" selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_year">
          <option value="" selected>Year</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
        </select>
      </div>
      <!--birthday details ends-->
      <div id="radio_button">
        <input type="radio" name="radiobutton" value="Female">
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="radiobutton" value="Male">
        <label >Male</label>
      </div>
       <div>
       <p id="sign_user" ">Sign Up </p>
      </div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
