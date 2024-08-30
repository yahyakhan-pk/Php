<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    
    function getGrade ($Score) {
        if ($Score >= 90) {
            return 'A';
        } elseif ($Score >= 80 && $Score <=89) {
            return 'B';
        } elseif ($Score >= 70 && $Score <=79) {
            return 'C';
        } elseif ($Score >=60 && $Score <= 69) {
            return 'D';
        }
        else {
            return 'F';
        }
    }

    echo getGrade(70);

    ?>
</body>
</html>