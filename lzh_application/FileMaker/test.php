<?php

require_once ('FileMaker.php');
$fm = new FileMaker('OS Client Management DataBase', 'http://192.168.5.6', 'admin', 'admin');

$cmd = $fm->newAddCommand("php_layout");
$cmd->setField("Application_id", "перевірка різних символів");
$cmd->setField("Operator_Name", "тут будуть символи типу = + - ' ' ^ & * 9 ( * # %$ @ $ % ! ~\" ");
$result = $cmd->execute();

if(FileMaker::isError($result)){ 
    die('Error - ' . $fm->getCode() . ' ' . $fm->getMessage());
}  
