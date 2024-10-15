<?php

    require_once "person.php";

    class Adult extends Person{
        public $studentID;

        public function __construct($fN,$ln,$stdID){
            parent::__construct($fN,$ln);
            $this->studentID = $stdID;
        }


        public function getPersonInfo(){
            return $this->fName. ' '. $this->lName. ' '. $this->studentID;
        }

    }
