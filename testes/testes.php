<?php

require_once __DIR__ . '/../src/Models/Person/Person.php';
require_once __DIR__ . '/../src/Models/Trainee/Trainee.php';
require_once __DIR__ . '/../src/Models/Personal/Personal.php';



$pessoa = new Person("Ana", 30, "Feminino", 60, '123.456.789-00');
$pessoa = new Trainee("Ana", 30, "Feminino", 60, '123.456.789-00', true, 2, 3);
$pessoa = new Personal("Ana", 30, "Feminino", 60, '123.456.789-00', 'graduacao');

