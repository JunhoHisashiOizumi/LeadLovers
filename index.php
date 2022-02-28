<?php

require "vendor/autoload.php";

use OizumiJunho\LeadLovers\LeadLovers;

$dados = array(
    "email" => "email@email.com.br",
    "name" => "Nome",
    "machineCode" => "1512",
    "emailSequenceCode" => "4",
    "sequenceLevelCode" => "1",
    "phome" => "(00)0000-0000"
);

var_dump(LeadLovers::ReadMachine());

var_dump(LeadLovers::InsertLead($dados));
