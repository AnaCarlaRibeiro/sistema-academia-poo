<?php

require_once __DIR__ . '/../Person/Person.php';


class Trainee extends Person{
 
    private $status;
    private $training;
    private $frequency;
//como a classe esta extendendo de pessoa e pessoa ja possue constructor, eu posso chamar esse constructor e depois acrescentar oq não tem la 
    public function __construct($name, $age, $gender, $weight, $cpf, $status, $training, $frequency){
        parent::__construct($name, $age, $gender, $weight, $cpf );
        $this->status = $status;
        $this->training = $training;
        $this->frequency = $frequency;

    }

    public function updateStatusByFrequency($valor){
        
        if($valor >= 3){
            $this->status = true;
            return;
        }
        $this->status = false;
    }

    public function checkTraining($training){ // nesse caso o parametro recebido será de 0 pq o treino esta vencido e será feito outro e 1 para não esta vencido
        
        if($training == 0){
            echo 'O aluno'. $this->getName() . 'precisa de um treino novo'; 
            return;
        }
        echo 'Treino ainda é válido!';

    }

     public function generateReport(){
     
        $infoTrainee = parent::generateReport();
        $infoTrainee .= 'Ativo:'. ($this->status? "Sim" : "Não") . "\n";
        $infoTrainee .= 'Treino:'. ($this->training>0? "Treino não precisa trocar": "Treino precisa trocar") . "\n";
        $infoTrainee .= 'Frequência:'. ($this->frequency >=3? "Aluno ativo": "Aluno faltante") . "\n";

        return 'As informações do aluno são:\n'. $infoTrainee;
    }



}