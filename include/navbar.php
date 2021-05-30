<?php
   require 'connection.php';
   include 'login_model.php';
?>
<html>
    <head>
        <title>AI_IN_MEDICAL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="external.css">
    </head>
    <body>
        <?php if(!isset($_SESSION['email'])){ ?>
        <div>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navstyle">  
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                           <span class="iconbar"></span>
                           <span class="iconbar"></span>
                           <span class="iconbar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand Team_1" style="color: white">Team 1</a>
                    </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="signup.php" style="color: white"><span class="glyphicon glyphicon-user"></span>Sign-up</a></li> 
                           <li><a href="#" data-toggle="modal" data-target="#loginmodal" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                           <li><a href="" style="color: white"><span class="glyphicon glyphicon-tasks"></span>About-us</a></li> 
                           <li><a href="" style="color: white"><span class="glyphicon glyphicon-phone"></span>Contact-us</a></li> 
                        </ul>
                    </div>
                </div>
             </nav>
        </div> 
        <?php } else { ?>
        <div>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navstyle">  
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                           <span class="iconbar"></span>
                           <span class="iconbar"></span>
                           <span class="iconbar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand Team_1" style="color: white">Team 1</a>
                    </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="report.php" style="color: white"><span class="glyphicon glyphicon-th-list"></span>Report</a></li> 
                           <li><a href="" style="color: white"><span class="glyphicon glyphicon-asterisk"></span>Setting</a></li> 
                           <li><a href="logout_script.php" style="color: white"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>  
                        </ul>
                    </div>
                </div>
             </nav>
        </div> 
        <?php } ?>
    </body>
</html>
