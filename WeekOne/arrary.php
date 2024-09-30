<?php


    include 'includes/header.php';



    $stuff = array('bird','cat','dog','fish');

    $animals = array(
        'bird'=>'fly',
        'cat'=>'meow',
        'dog'=>'bark',
    );


?>



<h1 style = "display:flex; justify-content:center;">Function demo</h1>

<ul>
    <?php foreach($stuff as $s): ?>
            <li><?=$s ?> </li>
    <?php endforeach; ?>
</ul>


<ul>
    <?php foreach($animals as $a => $dics): ?>
        <li><?= $a . ": " . $dics; ?> </li>
    <?php endforeach;?>
</ul>


<?php


    include 'includes/footer.php';

?>