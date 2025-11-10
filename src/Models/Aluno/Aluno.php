<?php

require_once '/src/Models/Pessoa/Pessoa.php';


class Aluno extends Pessoa{
 
    public $registration;
    public $training;
//como a classe esta extendendo de pessoa e pessoa ja possue constructor, eu posso chamar esse constructor e depois acrescentar oq não tem la 
    public function __construct($name, $age, $gender, $registration, $training, $weight){
        parent::__construct($name, $age, $gender, $weight );
        $this->registration = $registration;
        $this->training = $training;
    }

}