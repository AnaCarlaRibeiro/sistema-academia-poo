<?php

require_once __DIR__ . '/../Person/Person.php';

class Personal extends Person{
    private $education;

    public function __construct($name, $age, $gender, $weight, $education, $cpf){
        parent::__construct($name, $age, $gender, $weight, $cpf );

        $this->education= $education;

    }
// Usando polimorfismo
    public function generateReport(){
     
        $infoPersonal = parent::generateReport();
        $infoPersonal .= 'Formação:'. $this->education . "\n";
        return 'Informações do personal:\n'. $infoPersonal . "\n";
    }


}