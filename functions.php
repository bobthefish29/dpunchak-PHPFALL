<!-- just a basic funtion page -->

<?php



function doAdd($num1,$num2){
    $add = ($num1 + $num2);
    return $add;
}


//just takes in a date and does the math to find how many years its been
function findAge($date){
    $today = date("Y",strtotime('now'));
    $unixTime = date("Y",strtotime($date));
    $age = $today - $unixTime;
    return $age;
}

//this takes in w in kg and h in m than finds the bmi
function calBMI($w,$h){
    // BMI = weight (in kilograms) / (height in meters)^2

    //this is the formula for bmi
    $bmi = $w / ($h * $h);
    //this is getting the .00 descmal point
    $bmi = (floor($bmi * 100)) /100;
    return $bmi;
}

function bmiIndex($bmi){
    if($bmi <= 18.5){
        return 'Underweight';
    }else if($bmi > 18.5 & $bmi < 24.9){
        return 'Normal Weight';
    }else if($bmi > 25 & $bmi < 29.9){
        return 'overwaight';
    }else{
        return 'Obesity';
    }
}