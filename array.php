    <?php
        $title = 'Array and Printouts';
        include 'includes/header.php';
        
        echo '<h1>' . $title . '</h1>';
        
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
<?php
    require 'includes/footer.php';
?>