


<?php
    

    $my_str = 'cazzarola è una parolaccia';

    $badwords = $_GET["parolaccia"];


    // Display replaced string
    echo str_replace($badwords , "***", $my_str);

    
?>


