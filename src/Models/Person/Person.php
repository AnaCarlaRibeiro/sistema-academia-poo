<?php

class Person{
    private string $name;
    private  $age;
    private $gender; //genero
    private $weight; // peso
    private $cpf; // 



public function __construct($name, $age, $gender, $weight, $cpf){
    echo "Chegou no construtor de Pessoa\n";
    $this->name= $name;
    $this->age = $age;
    $this->gender = $gender; 
    $this->weight = $weight;
    $this->cpf = $cpf;
}

//COntrolando o acesso dos meus metodos

//COm essa função, eu estou encapsulando os atributos que não podem ser alterados diretamente, no caso o cpf ele não muda nunca
public function changeRegistration($info, $valor){

    if($info ==='name' ){
        $this->name= $valor;
        echo 'O campo ' . $info . ' foi atualizado para ' . $valor . "\n"; 

    }
    if($info ==='age'){
        $this->age = $valor;   
        echo 'O campo ' . $info . ' foi atualizado para ' . $valor . "\n"; 

    }
    if($info === 'gender'){
        $this->gender = $valor; 
        echo 'O campo ' . $info . ' foi atualizado para ' . $valor . "\n"; 
     
    }
    if($info == 'weight'){
        $this->weight = $valor;
        echo 'O campo ' . $info . ' foi atualizado para ' . $valor . "\n"; 
    }
}

//essa função seja igual pra todas, porém irá exibir informações distintas - polimorfismo
public function generateReport(){
       
        $info = '';
        $info.= 'Nome:'. $this->name . "\n";
        $info.= 'Idade:'. $this->age . "\n";
        $info.= 'CPF:'. $this->cpf . "\n";
        $info.= 'Weight:'. $this->weight . "\n";
        $info.= 'Gênero:'. $this->gender . "\n";
        return $info;
}

public function getName(){
    return $this->name;
}



}