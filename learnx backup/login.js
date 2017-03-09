function searchbutton(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 femail = document.form.User.value,
 fpassword = document.form.Pass.value,
 
 
  if (femail == "" )
 {
  document.form.User.focus();
  document.getElementById("errorBox").innerHTML = "enter the email";
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.User.focus();
  document.getElementById("errorBox").innerHTML = "enter the valid email";
  return false;
  }
  if(fpassword == "")
  {
   document.form.Pass.focus();
   document.getElementById("errorBox").innerHTML = "enter the password";
   return false;
  }
}