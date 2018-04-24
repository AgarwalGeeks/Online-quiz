<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
    <style>
        .bodysignup{
            
            background-image: url(image/signup.jpg);
            background-position: center;
            background-size: cover;
        }
    
        .card
        {
            background-image: url(image/background%20signup.jpg);
            background-size: cover;
            background-position: center;
            
            
        }
    </style>
<script language="javascript">
function check()
{
var count=0;
 if(document.form1.lid.value=="")
  {
      
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
      
	return false;
      
  }
 
 if(document.form1.pass.value=="")
  {
     
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
      
  } 
  if(document.form1.cpass.value=="")
  {
      
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
      
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
      
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
      
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
      
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
      
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
        
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="w3.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bodysignup">
<?php
include("header.php");
?>
 
    
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" class="w3-container w3-card-4 w3-animate-zoom w3-border w3-round card w3-light-grey w3-text-white w3-center" style="width:500px; margin-left:480px">
<h2 class="w3-center">New user Register</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round" type="text" name="lid" placeholder="LoginId">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round" type="password" name="pass" placeholder="Password" >
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo  w3-round"  name="cpass" type="password" id="cpass" placeholder="Confirm Password">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-home"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round"   name="address" id="address" type="text" placeholder="Address">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round" name="city" type="text" id="city" placeholder="City">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round" name="phone" type="text" id="phone" placeholder="phone no.">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-indigo w3-round" name="email" type="text" id="email" placeholder="email">
    </div>
</div>

<input type="submit" name="Submit" value="Signup" id="sigup_btn" class=" w3-center w3-white w3-text-blue w3-hover-blue w3-border w3-border-blue w3-round" style="width:140px; height:35px; margin-bottom:10px">

</form>

</body>
</html>
