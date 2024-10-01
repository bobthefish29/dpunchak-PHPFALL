<?php


//this is adding infomration
require 'function.php';
require 'assingment5.php';


//this is the for loop just to check if the numbers is there, its going from 0 - 100
for ($i = 0; $i <= 100; $i++ ) {
    
    echo $i,' ', fizzBuzz($i) , '</br>', '</br>';
}
