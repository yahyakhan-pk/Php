<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even OR Odd Number</title>
</head>
<body>
    <?php
    // store a number in a variable
    $number = 100;

    // to check the number is even or odd
    
    if($number % 2 ==0) {
        // if the remainder of the number divided by 2 is 0 then
        echo "Even Number";
    } 
    else {
        // if the number is not 0 then
        echo "Odd Number";
    }
  
    ?>
</body>
</html>