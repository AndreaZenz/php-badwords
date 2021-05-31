<?php


$my_str = 'cazzarola è una parolaccia';

$badwords = $_GET["parolaccia"];


// Display replaced string



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        echo str_replace($badwords, "***", $my_str);
        echo "<br>";
        echo strlen($my_str);
        ?>
        <br>
    </p>
</body>

</html>