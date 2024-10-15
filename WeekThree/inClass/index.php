<?php
    include_once "adult.php";

    $person = new Adult("david","pun",20);
    $person2 = new Adult("david","pun",12);

    $person2->setFirst("phill");

?>

    <h2><?=$person->getFirst();?></h2>
    <h2><?=$person->getPersonInfo();?></h2>


    <h2><?=$person2->getFirst();?></h2>
    <h2><?=$person2->getPersonInfo();?></h2>

