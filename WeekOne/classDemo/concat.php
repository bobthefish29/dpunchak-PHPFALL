<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <h1>Hello</h1>

        <?php
        $word = 'hello';
        $word2 = 'world';
        $word3 = '.';


        ?>

        <p> <?php echo $word . ' ' . $word2 . $word3; ?></p>
        <p> <?php echo $word . $word2; ?></p>
        <p> <?php echo "$word . $word2"; ?></p>

    </body>
</html>