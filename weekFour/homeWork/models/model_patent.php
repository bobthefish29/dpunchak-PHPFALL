<?php


include (__DIR__.'/db.php');

function getPerson(){

    //this is just how we can acces the connection
    global $db;

    $results =[];

    $ssTemp = $db->prepare("SELECT * FROM PATIENTS");

    if($ssTemp->execute() && $ssTemp->rowCount() > 0){
        $results = $ssTemp->fetchAll(PDO::FETCH_ASSOC);
    }


    return $results;
}


function addPerson($fname,$lname,$marrage,$birth){
    global $db;

    $results= "";

    $sql = "INSERT INTO PATIENTS SET patientFirstName = :fn, patientLastName = :ln, patientMarried = :m, patientBirthDate = :b";

    $ssTemp = $db->prepare($sql);

    $binds = array(
        ":fn" => $fname,
        ":ln" => $lname,
        ":m" => $marrage,
        ":b" => $birth,
    );

    if ( $ssTemp->execute($binds) && $ssTemp->rowCount() > 0){
        $result = "Data Added";
    }else{
        $result = "Could not Add";
    }

    return $result;

}