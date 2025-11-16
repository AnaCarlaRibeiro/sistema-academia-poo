📝 README — Sistema de Academia (POO em PHP)
📌 Sobre o Projeto

Este projeto foi criado com o objetivo de praticar os conceitos fundamentais de Programação Orientada a Objetos (POO) em PHP:

Encapsulamento

Herança

Polimorfismo

A aplicação simula um pequeno sistema de academia contendo três entidades principais:

Person → Classe base

Trainee → Aluno da academia

Personal → Personal trainer

Cada classe estende ou complementa a classe principal Person, adicionando comportamentos específicos.

🧱 Estrutura do Projeto
/src
 └── /Models
      ├── /Person
      │     └── Person.php
      ├── /Trainee
      │     └── Trainee.php
      └── /Personal
            └── Personal.php

/testes
 └── testes.php

README.md

🚀 Funcionalidades Implementadas
🔹 Classe Person

Possui atributos básicos: nome, idade, gênero, peso e CPF.

Controla atualizações via método:

changeRegistration($info, $valor)

Gera relatórios padronizados:

generateReport()

Fornece getters necessários:

getName()

🔹 Classe Trainee (Aluno)

Extende Person e adiciona:

Status do aluno (ativo ou não)

Frequência semanal

Tipo de treino

Atualização automática do status pela frequência:

updateStatusByFrequency($valor)

Verificação se o treino está vencido:

checkTraining($training)

Relatório completo sobrescrito:

generateReport() (polimorfismo)

🔹 Classe Personal

Extende Person e adiciona:

Formação profissional (education)

Implementa sua própria versão de relatório:

generateReport() (polimorfismo)

🧪 Como executar os testes

Você pode usar o shell interativo do PHP:

php -a


E carregar seus testes:

require 'testes/testes.php';


Ou criar e executar arquivos de teste diretos:

php testes/testes.php

💡 Exemplos rápidos

Criando uma pessoa:

$p = new Person("Ana", 30, "Feminino", 60, "123.456.789-00");
echo $p->generateReport();


Criando um aluno:

$a = new Trainee("João", 22, "Masculino", 75, "222.333.444-55", true, 2, 3);
echo $a->generateReport();


Criando um personal:

$per = new Personal("Carlos", 40, "Masculino", 82, "987.654.321-00", "Educação Física");
echo $per->generateReport();

🎯 Objetivo do Projeto

Este repositório tem como foco aprimorar os conceitos fundamentais de POO através de um mini-sistema funcional, servindo tanto para prática quanto como base para projetos futuros.

📌 Tecnologias utilizadas

PHP 8+

POO (Programação Orientada a Objetos)

✔️ Status do Projeto

Concluído para fins de estudo, podendo ser expandido no futuro.

🤝 Contribuições

Sinta-se à vontade para abrir issues e sugerir melhorias!
