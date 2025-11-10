<?php

class Pessoa{
    public string $name;
    public  $age;
    public $gender;
    public $weight;


public function __construct($name, $age, $gender, $weight){
    echo "Chegou no construtor de Pessoa\n";
    $this->name= $name;
    $this->age = $age;
    $this->gender = $gender; 
    $this->weight = $weight;
}



}