<?php


function headOrTails(){
    if(mt_rand(0,1) == 0) return 'heads';
    return 'tails';


}

function calGrade($grade){

    if($grade >= 90){
        return "A";
    }
    else if($grade >= 80){
        return "B";
    }
}