<!-- this is the first assigments -->
<?php $animals = array('Dog','cat','fish','whale');?>
<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- this is the first assigmet for lists -->
        <h1>Hello</h1>
        <ul>
            <?php foreach($animals as $a):?>
                <li> <?= $a ?> </li>
            <?php endforeach; ?>
        </ul>
        
        <!-- this is the sescond assigment-->
        <ul>
            <?php foreach($task as $v => $desc): ?>
                <li><?= $desc; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>