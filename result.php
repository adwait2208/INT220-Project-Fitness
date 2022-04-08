<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your BMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img class="newg" src="newg.jpg" alt="excercise">
</body>
</html>
<div class="g">
<?php


if($_POST!=null)  {
 
     $h=empty($_POST["height"]) ? 0 : $_POST["height"];
     $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
     $index =0;
     if($h !=0 && $w !=0){
         $index = round($w/($h*$h)* 703,2);
     }
     echo "YOUR BMI=".$index;
}
  
    // $bmi="";
    // $bmiStyle="alert alert-primary"; }
?>
</div>