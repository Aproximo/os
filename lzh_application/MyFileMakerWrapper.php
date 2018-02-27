<?php

require_once("FileMaker.php");

class MyFileMakerWrapper extends Filemaker{

    private $dbname = 'OS Client Management DataBase';
    private $address = 'http://91.90.18.250';
    private $login = 'PHP_user';
    private $password = 'PHPP@ssword1'; 

    public function connect()
    {
        return new FileMaker($this->dbname, $this->address, $this->login, $this->password);
    }
    public function isConnected($fm){

         
         $connected = $fm->listLayouts();
        if(FileMaker::isError($connected)){
            $error =  "<br>" . $connected->message . "<br>";
            return $error;
        }
            return true;
    }
    public function disconnect(){}
    
    public function sendData($array, $dbName){}

      public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }


    return $this;
  }
}

