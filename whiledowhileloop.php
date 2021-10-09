<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite - While/Do-While Loops</title>
</head>
<body>
    <?php
        echo '<h1>While Loop</h1>';
        $grade = 0;
        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }
        echo '<p>EXIT LOOP</p>';

        echo '<h1>Do-While Loop</h1>';
        $grade2 = 0;
        do{
            echo '<p>I am less than 10  /  Do-While</p>';
            $grade2++;
        }while($grade2 < 10);
        echo '<p>EXIT LOOP</p>';
    ?>
</body>
</html>