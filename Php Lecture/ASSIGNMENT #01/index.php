<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture #01: Introduction php</title>
</head>
<body>
    <?php

    // store the current year in a variable
        $currentyear = 2044;

    // check if the year is a leap year

    if($currentyear % 4 == 0){
        echo "it is a leap year";
    } else {
        echo "it is not a leap year";
    }

    ?>
</body>
</html>