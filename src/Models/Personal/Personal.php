<?php

require_once '/src/Models/Pessoa/Pessoa.php';


class Personal extends Pessoa{
    public $education;

    public function __construct($name, $age, $gender, $weight, $education){
        parent::__construct($name, $age, $gender, $weight );

        $this->education= $education;

    }

}