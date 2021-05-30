<?php
include 'include\connection.php';
   session_start();
   $preg = $_SESSION['preg'];
   $glu = $_SESSION['glu'];
   $bp = $_SESSION['bp'];
   $st = $_SESSION['st'];
   $ins = $_SESSION['ins'];
   $bmi = $_SESSION['bmi'];
   $dpf = $_SESSION['dpf'];
   $age = $_SESSION['age'];
?>
<html>
    <head>
        <title>Result | AI_IN_MEDICAL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="external.css">
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>
    </head>
    <body>
        <?php include 'include/navbar.php'; ?>
        
        <div class="container-fluid result_image">
            <div id="result_content">
                <h2 style="color: white">Get you result now</h2>
                <button class="btn btn-lg active" style="color: white; background-color: #00003f" onclick="run();">Click here</button>
               <div id="result" style="color: white"></div>
                <script>
                    async function run(){
                    document.getElementById("result").innerHTML = "<h3>Please wait....</h3>";
                    const MODEL_URL = 'model1.json';
                    const model = await tf.loadLayersModel(MODEL_URL);
                    
                    var PR = parseFloat(<?php echo $preg; ?>);
                    var GL = parseFloat(<?php echo $glu; ?>);
                    var BP = parseFloat(<?php echo $bp; ?>);
                    var ST = parseFloat(<?php echo $st; ?>);
                    var IN = parseFloat(<?php echo $ins; ?>);
                    var BM = parseFloat(<?php echo $bmi; ?>);
                    var DPF = parseFloat(<?php echo $dpf; ?>);
                    var AG = parseFloat(<?php echo $age; ?>);
                    
                    var input = tf.tensor2d([PR,GL,BP,ST,IN,BM,DPF,AG], [1,8]);
                    var result = model.predict(input);
                    
                    var extra = Number(result.dataSync());
                    if (extra >= 0.5) {
                        document.getElementById("result").innerHTML = "<h3>Your report is Positive.</h3>";
                       }
                    else {
                        document.getElementById("result").innerHTML = "<h3>Your report is Negative.</h3";
                       }
                   }
                </script>
            </div>  
        </div>
    </body>
</html>
