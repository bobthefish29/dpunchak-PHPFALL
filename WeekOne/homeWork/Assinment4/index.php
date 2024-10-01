<?php 




//this is making the functions there
require 'functions.php';


// dd($animle);


// this is the whole webPage
require 'assingment4.php';

//this is the age, if you change it, it will display some different
$age = 21;

//this is just just displaying the value
if(checkAge($age)){
    echo 'Too old';
}
else{
    echo 'Too young';
}
