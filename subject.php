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
    </head>
    <style>
    
    </style>
    <body class="body">
        <?php 
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}

if (isset($_SESSION[login]))
{
echo '<div class=""><h1 class="w3-text-blue" align=center>Welcome to Online Exam</h1>
        <div class="w3-container   w3-center" style="margin-top:30px">
        
        <img src="image/subject.png" width="80" height="80"/><a href="sublist.php" class="style4 w3-large">Select Subject for Quiz </a>
        
        <img src="image/result.png" width="80" height="80"/> <a href="result.php" class="style4 w3-large" >Check Result </a>
        </div>
            </div>';
   
		exit;
		
}

    ?> 
    </body>