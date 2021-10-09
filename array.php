<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite - Arrays</title>
</head>
<body>
<?php
        echo '<h1>Arrays</h1>';
        
        //Variable
        $num = 3;

        //Array - Only 1 datatype
        $numbers = array(1, 2, 3,4, 5, 6, 7, 8, 9, 10, 34, 56, 67, 90);
        //You can access the value in a subscript of the array using the index
        echo $numbers[5];

        echo '<p>'.$numbers[8].'</p>';

        //To know the size of "Numbers"
        $size = count($numbers);
        echo '<p>Array "Numbers" is size: '.$size.'</p>';

        //Travel all values at "Numbers"
        for($count = 0; $count < $size; $count++){
            echo '<p>number: '.$numbers[$count].'</p>';
        }
    ?>
</body>
</html>