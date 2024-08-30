<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH CASE</title>
</head>
<body>
    <?php
    $char = 'a';

    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
    
        echo $char, "it is a vowel";
        break;
    
        default:
        echo $char, "consonent";
    }
    
    
    ?>
</body>
</html>