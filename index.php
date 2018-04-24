<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
    <link href="w3.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="New%20folder/css/bootstrap.min.css">
    <script src="New%20folder/js/jquery-3.2.1.min.js"></script>
    <script src="New%20folder/js/bootstrap.min.js"></script>
</head>
    <style>
        .logindiv
        {
            background-image:url(image/loginimage.jpg);
            background-size: cover;
            background-position: center;
            opacity: 0.9;
            background-repeat: none;
            
            
        }
        .body
        {
            background-image: url(image/blackboard-business-chalkboard-355988.jpg);
            background-size: cover;
            background-position: center;
            opacity: 0.9;
            
            
        }
        
       
       image1 {
    -webkit-animation: mover 2s infinite;
    animation: mover 2s infinite;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-200px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-200px); }
}
    
    
    
    
    </style>

<body class="body">
<?php
include("header.php");
include("database.php");
extract($_POST);




    ?> 
    <h2 class="w3-container w3-center w3-xxlarge w3-text-white w3-shadow"><b>ONLINE QUIZ FOR CSE STUDENTS</b></h2>
    
    <div class="w3-card-4 w3-container paragraph w3-left" style="width:500px; margin-left:70px; margin-top:50px">
        <p class="w3-container w3-text-white w3-xlarge">
            This website provides quizes for <strong>Programming Languages</strong>
            It contains quizzes for Python,Php,mysql,Java etc.....
            Every Language contains some test Each test contains 10 questions.
            All questions have one correct answer out of four you just have to click on the right answer and go to the next question.<br>
            <span class="w3-text-teal"><b>To take the quiz login at the right</b> </span>
        </p>
    
    
    
    </div>
    <img class="w3-container image1" style="margin-top:140px; margin-left:30px" src="image/ready-quiz-1.gif" width=25%/>
<div  class="w3-container logindiv w3-animate-zoom w3-round w3-right w3-margin w3-text-white w3-card-4" style="width:350px; height:400px; margin-top:100px; margin-right:300px">
    <form name="form1" method="post" action="subject.php">
    <h2 class="w3-center w3-margin-top">LOGIN TO TAKE QUIZ</h2>
    <div class="w3-row w3-section">
  <div class="w3-col" style="width:50px; margin-top:20px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-round" type="text" style="margin-top:20px"
             name="loginid" id="loginid2" placeholder="LoginId">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-white w3-round" type="password" name="pass" id="pass2" placeholder="Password" >
    </div>
</div>
    <span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span>
     <span class="w3-left">forget password?? </span>
    <span class="w3-right">New user ??<a class="w3-text-pink" href="signup.php"><strong>signup</strong></a></span>
    <input type="submit" name="submit" value="LOGIN" id="submit" class=" w3-center w3-white w3-text-blue w3-hover-blue w3-border w3-round-xxlarge w3-text-pink" style="width:250px; height:35px; margin-bottom:10px; margin-top:15px; margin-left:50px">
    </form>

    
</div>

           
          

</body>
</html>
