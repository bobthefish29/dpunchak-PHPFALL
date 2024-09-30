<?php

$stuff = true;

$stuff = 10;
$stuff = arrary('bird','cat','dog','fish');

// $stuffLenght = count($stuff)

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> <?= $title; ?> </title>
    </head>


    <body>

        <ul>
            <?php for ( $i = 0; $i < count($stuff); $i++){ ?>
                <li><?php echo $stuff[$i];?></li>
            <?php  } ?>
        </ul>

        <ul>
            <?php foreach($stuff as $s):?>
                <li></li>
            <?php endforeach; ?>
        </ul>


    </body>

</html>