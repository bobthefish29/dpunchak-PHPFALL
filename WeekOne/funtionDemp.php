<?php
    include 'includes/header.php';

    include 'function.php'
?>

<h1 style = "display:flex; justify-content:center;">Function demo</h1>


<?php 

    $heads = 0;
    $tails = 0;

    for ($i = 0; $i < 1000; $i++){

        if(headOrTails() == "heads"){
            $heads ++;
        }
        else{
            $tails ++;
        }

    }


    echo "HEads count: $heads<br>";
    echo "tails count: $tails";


?>


<?php include 'includes/footer.php'; ?>



