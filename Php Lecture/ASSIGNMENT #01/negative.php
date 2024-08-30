<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positve or Negative Number</title>
</head>
<body>
    <?php
     //store a number in a variable
     $number = -10;

     // use conditional statements if the number is positive or negative
 
     if($number > 0) {
         echo "the number is positve";
     } elseif ($number < 0) {
         echo "the number is negative";
     } else {
         echo "the number is neither positve nor negative";
     }
 
    
    ?>
</body>
</html>