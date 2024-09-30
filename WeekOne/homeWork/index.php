<?php 
    $animals = array('Dog','cat','fish','whale');


?>


<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Hello</h1>

        
        <ul>
            <?php foreach($animals as $a):?>
                <li> <?= $a ?> </li>
            <?php endforeach; ?>




        </ul>

    </body>



</html>