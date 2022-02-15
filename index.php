<?php 

$variable = 'Questo è una variabile php';

$variable_length = strlen($variable);

$variable_censure = $_GET['censure'];

$string_censure =  str_replace($variable_censure, '*' , $variable);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>  <?php echo $variable ?> </h1>
<h2>   <?php echo $string_censure ?>  </h2>
<p>  <?php echo $variable_length ?> </p>

</body>
</html>