<?php
   include 'include\connection.php';
   session_start();
   if (isset($_SESSION['email']))
   {
      header('location: report.php');
   }
    if ( !isset($_POST['email_error'])) 
    {
      echo $_POST['email_error']="";
    }
    if ( !isset($_POST['password_error']))
    {
      echo $_POST['password_error']="";
    }
?>
<html>
    <head>
        <title>Sign-up | AI_IN_MEDICAL</title>
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
        <div class="container-fluid decor_bg signup_image">
            <div class="row content">
                <div class="container">
                    <div class="col-lg-5 col-lg-offset-5 col-md-6 col-md-offset-3" style = "background-color: rgba(245,245,245,0.7)">
                        <h3 style="font-family: lato; color: #00003f">New patient here?</h3>
                        <h2 style="font-family: lato; color: #00003f">SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><div><?php echo $_POST['email_error']; ?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "include/footer.php"; ?>
    </body>
</html>
