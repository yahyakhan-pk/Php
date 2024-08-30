<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP</title>
</head>
<body>
    <?php
       // FOR LOOP

       for ($i = 0; $i <=4; $i++) {
        echo $i . "iteration" . "<br>";
    }

    // WHILE LOOP

    $i = 1;
    while ($i <= 15) {
        echo $i . "iteration" . "<br>";
        $i++;
    }

    // DO WHILE LOOP

    $i = 1;
    do {
        echo $i . "iteration" . "<br>";
        $i++;
    } while ($i <=7);

    ?>
    
</body>
</html>