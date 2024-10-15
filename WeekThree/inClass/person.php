<?php


abstract class Person{
    protected $fName;
    protected $lName;
    protected $ID;

    // private static $objectCount = 0;

    public function __construct($fN,$lN){
        $this->fName = $fN;
        $this->lName = $lN;
        // $this->ID = self::$objectCount;
        // self::$objectCount++;
    }

    public function setFirst($fN){
        $this->fName = $fN;
    }
    public function getFirst(){
        return $this->fName;
    }
    public function setLast($lN){
        $this->lName = $lN;
    }
    public function getLast(){
        return $this->lName;
    }

    // public function getID(){
    //     return $this->ID;
    // }

    public function fullName(){
        return $this->fName ." ".$this->lName;
    }

    abstract function getPersonInfo();


}