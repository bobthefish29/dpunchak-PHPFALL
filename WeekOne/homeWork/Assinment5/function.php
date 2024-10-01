<?php





//this is the function that takes in a number and check it
function fizzBuzz($num){
    
    if(($num % 2) == 0){
        return 'Fizz';
    }
    elseif(($num % 3) == 0){
        return 'Buzz';
    }
    return $num;
}
