<?php
   include 'include\connection.php';
   session_start();
   $nam = $_SESSION['name'];
?>
<html>
    <head>
        <title>Report | AI_IN_MEDICAL</title>
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
          <div class="container-fluid decor_bg">
              <div class="row" style="padding-top: 30px;">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <?php 
                            echo "<h2 style='font-family: lato; color: #00003f'>Welcome $nam<br>submit your report here</h2>"?>
                            <form role="form" action="report_subscript.php" method="POST">
                               <div class="form-group">
                                    <label>Pregnancies</label>
                                    <input type="float" class="form-control"  name="pregnancies" placeholder="Number of pregnancies" required>
                                </div>
                                <div class="form-group">
                                    <label>Glucose</label>
                                    <input type="float" class="form-control" placeholder="Plasma glucose concentration" name="Glucose" required>
                                </div>
                                <div class="form-group">
                                    <label>Blood Pressure</label>
                                    <input type="float" class="form-control" placeholder="in mm Hg" name="Blood_pressure" required>
                                </div>
                                <div class="form-group">
                                    <label>Skin Thickness</label>
                                    <input type="float" class="form-control" placeholder="in mm" name="Skin_Thickness" required>
                                </div>
                                <div class="form-group">
                                    <label>Insulin</label>
                                    <input type="float" class="form-control" placeholder="in mu U/ml" name="Insulin">
                                </div>
                                <div class="form-group">
                                    <label>BMI</label>
                                    <input type="float" class="form-control" placeholder="in kg/m²" name="BMI" required>
                                </div>
                                <div class="form-group">
                                    <label>diabetes pedigree function</label>
                                    <input type="float" class="form-control" placeholder="diabetes pedigree function" name="diabetes_pedigree_function" required>
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="float" class="form-control" placeholder="in years" name="Age" required>
                                </div>
                                <button type="float" class="btn btn-primary btn-block" style="background-color:#00003f"><span class="glyphicon glyphicon-inbox"></span> Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "include/footer.php"?>
    </body>
</html>

