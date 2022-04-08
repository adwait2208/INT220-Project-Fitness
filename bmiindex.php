<?php 
$insert = false;
if(isset($_POST['name'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    } 
    // echo "Success connecting to the db";

    // Collect post variables
     $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc']; 
    $sql = "INSERT INTO `fitness`.`fitness` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    if($con->query($sql) == true)
        //echo "Successfully inserted";}
        $insert = true;
    else {echo "Error:sql <br> $con->error";
    }
        $con->close(); 

    } 
    ?>
  

<?php
 
 if($_POST!=null)
 {
     $h=empty($_POST["height"]) ? 0 : $_POST["height"];
     $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
     $index =0;
     if($h !=0 && $w !=0)
         $index = round($w/($h*$h)* 703,2);
  
     $bmi="";
     $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
         $bmi="underweight - BMI : " . $index;
         $bmiStyle="alert alert-secondary";
     } else if ($index < 25) {
         $bmi="normal - BMI : ". $index;
         $bmiStyle="alert alert-success";
     } else if ($index < 30) {
         $bmi="overweight - BMI : " . $index;  
         $bmiStyle="alert alert-warning";
     } else {
         $bmi="obese - BMI : " .$index;  
         $bmiStyle="alert alert-danger";
     } 
 }
  
 ?>
 <!DOCTYPE html>
 <html lang="en-US">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> BMI </title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
 </head>
  
     <body>
     <img class="tg" src="tg.jpg" alt="excercise">
         <div class="container">
             <h1>BODY MASS INDEX</h1>
             
             <form method="post" action="result.php">
                 <div class="form-group">
                   <label for="height">Please Enter your Height in Inches :</label>
                   <input type="text" class="form-control" name="height" placeholder="height in inches">
                 </div>
                 <div class="form-group">
                   <label for="weight">Please Enter your weight in Pounds :</label>
                   <input type="text" class="form-control"  name="weight" placeholder="weight in pound">
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn btn-success">Calculate</button>
                 </div>
               </form>
               <!-- <div class="<?=$bmiStyle?>" role="alert" id="bmi"> -->
                 <?php 
                //  echo $bmi;
                 ?>
             </div>
           </div>  
     
    
 </body>
 </html>
  