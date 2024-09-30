<?php 

//here we are setting the vars
$task = [
    'title' => 'assoced array',
    'due' => '10/01/2024',
    'assigned_to' => 'david',
    'completed' => 'false'


]; 
// title, due , assigned_to, completed

//this is just changing it to someone else
$task['assigned_to'] = 'paul';

// this is the whole webPage
require 'wk1-Associative Arrays.php';
