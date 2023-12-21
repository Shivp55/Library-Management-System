<?php
session_start();
error_reporting(0);
include('includes/config.php');
$username=$_POST['username'];
$email=$_POST['email'];
$msg=$_POST['msg'];
// $sql ="SELECT UserName,Password FROM admin WHERE UserName=:username and Password=:password";
$sql =  "INSERT INTO cont(name,email,mess) VALUES('$username','$email','$msg')";
$query= $dbh -> prepare($sql);
$query-> execute();
echo "<script type='text/javascript'>";
        echo "alert('Submitted successfully')";
        echo "</script>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style type="text/css">
        body{
            
        }
        a:link{
            color: darkgreen;
        }
        a:hover{
            color: red;
        }
    </style>
</head>

<body>
    Thank you for Feedback.. We will get back soon!!
    <a href="index.html"> Click here to go back</a>
</body>
</html>