    <?php
        $title = 'While/Do-While Loops';
        $subtitle1 = 'While Loop';
        $subtitle2 = 'Do-While Loop';
        include 'includes/header.php';
        
        echo '<h1>' . $subtitle1 . '</h1>';
        $grade = 0;
        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }
        echo '<p>EXIT LOOP</p>';

        echo '<h1>' . $subtitle2 . '</h1>';
        $grade2 = 0;
        do{
            echo '<p>I am less than 10  /  Do-While</p>';
            $grade2++;
        }while($grade2 < 10);
        echo '<p>EXIT LOOP</p>';
    ?>
</body>
</html>
<?php
    require 'includes/footer.php';
?>