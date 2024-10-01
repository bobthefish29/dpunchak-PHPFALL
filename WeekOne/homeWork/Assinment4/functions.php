<?php

$animle = ['dog','cat'];


//this is the old one
function dd($animle){

    echo '<pre>';
    die(var_dump($animle));
    echo '</pre>';

}


//this is the chekc age funciton
function checkAge($data){

    if($data >= 21){
        return true;
    }
    else{
        return false;
    }
}