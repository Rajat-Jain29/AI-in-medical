<?php
   include 'include\connection.php';
   session_start();
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
        <?php include 'include/navbar.php'; ?>
        <div  id="banner_image">
                <div class="container">
                    <div id="banner_content">
                        <p style="margin-bottom: 20px;"><h1>Get your diabetes result now.</h1></p>
                    <a href="signup.php"><button class="btn btn-lg active" style="color: black; background-color: #116FDC">click here</button></a>
                    </div>
                </div>  
            <?php include "include/footer.php"; ?>
        </div>
         
    </body>
</html>
