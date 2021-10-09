<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Newsite - Switch Statement</title>
</head>
<body>
    <?php
        echo '<h1>Switch Statement</h1>';
        $grade = 'A';

        //Switch statement
        switch($grade){
            case 'A':
                echo '<h2 style="color: #6D9F6C">YOU ARE A SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2 style="color: #006EE6">YOU DID WELL</h2>';
                break;
            default:
                echo '<h2 style="color: #B00048">YOU HAVE FAILED</h2>';
                break;
        }
    ?>
    
</body>
</html>