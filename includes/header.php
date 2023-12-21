<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
                background-color:white;
            
        }
        a:link{
            color: black;
        }
        a:hover{
        background-color:cornflowerblue;

        }
        li{
            stroke: limegreen;
        }
        </style>
    </head>
    
<body>
        
   
<!-- <div style="background-color:antiquewhite;"> -->
    <div  style="background-color:aliceblue;" class="navbar navbar-inverse set-radius-zero"  >
<h1 style="text-align:center;color:black; font-size:40px; font-weight:bold;"> SMART LMS </h1></div>
<div class="navbar navbar-inverse set-radius-zero"  style=" background-color:aliceblue;">
        
        
        <div class="container"  >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background-color:aliceblue;" >

                    <img src="assets\img\new1.jpg" />
                </a>
               
            </div>
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div" >
                <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section" style="background-color:white;">
        <div class="container" style="background-color:white;">
            <div class="row " style="background-color:white;">
                <div class="col-md-12" style="background-color:white;">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                            <li><a href="issued-books.php">Issued Books</a></li>
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                                     <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li> -->
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section" style="background-color:aliceblue;">
        <div class="container" style="background-color:aliceblue;">
            <div class="row "style=" background-color:aliceblue;">
                <div class="col-md-12"style=" background-color:aliceblue;">
                    <div class="navbar-collapse collapse " style=" background-color:aliceblue;">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
                         <li><a href="index.html">Home</a></li>
                         <li><a href="index.php#ulogin">User Login</a></li>
                            <li><a href="signup.php">User Signup</a></li>
                         
                            <!-- <li><a href="adminlogin.php">Admin Login</a></li> -->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    


    <?php } ?>

    </body>
</html>