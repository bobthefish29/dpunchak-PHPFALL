<?php


include (__DIR__.'/db.php');

function getPerson(){

    //this is just how we can acces the connection
    global $db;

    $results =[];

    $ssTemp = $db->prepare("SELECT * FROM PATIENTS");

    if($ssTemp->execute() && $ssTemp->rowCount() > 0){
        $results = $ssTemp->fetchAll(PDO::FETCH_ACCOC);
    }
    else{
        $results = "error";
    }


    return $results;
}


function addPerson($fname,$lname,$marage,$birth){

}