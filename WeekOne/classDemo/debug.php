<?php include 'includes/header.php';?>

<h1 style = "display:flex; justify-content:center;">Debug</h1>


<?php

    $true = "php is fun so far";
    var_dump($true);

?>

</br></br>

<?php 

    // this is braking up the sting at the " "
    $arraryTrue = explode(" ", $true);
    // this is just dumping the information about the var
    var_dump($arraryTrue);


?>


<?php include 'includes/footer.php'; ?>



