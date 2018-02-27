<?php


class Data {
    public $values = array();

    public function __construct($keys, $array)
    {           
            foreach ($keys as  $value){
            if (array_key_exists($value, $array)){
                $this->values[$value] = $array[$value];
            }}
            if (in_array("address", $keys)){
                $this->values["address"] = "";
            $this->CombainAdress($array, "");}
        
    }
        public function addGeneralData($uploadData){

        $this->values = array_merge($this->GetData(), $uploadData);

    }
    
    public function GetData()
    { 
        return $this->values;
    }

     protected function CombainAdress ($array, $suffix){

        if (!empty($array["Region" . $suffix])) {
             $this->values["address"] = $array['Region' . $suffix] . " область, ";
        }
        if (!empty($array["District" . $suffix])) {
            $this->values["address"] = $this->values["address"] . $array['District' . $suffix] . " район, ";
        }
        if (!empty($array["Settlement" . $suffix])) {
            $this->values["address"] = $this->values["address"] . "населений пункт - " . $array['Settlement' . $suffix];
        }
        if (!empty($array["Street" . $suffix])) {
            $this->values["address"] = $this->values["address"] . ", вулиця " . $array['Street' . $suffix];
        }
        if (!empty($array["Build_number" . $suffix])) {
            $this->values["address"] = $this->values["address"] . ", будинок - " . $array['Build_number' . $suffix];
        }
        $this->values["address"] = $this->values["address"] . ".";
             }


    public function insertToFilemaker($fileMaker, $KeyArray, $dbnameForGeneral){
        

         $cmd = $fileMaker->newAddCommand($dbnameForGeneral);
         $result = $this->addToFileMaker($this->values, $KeyArray, $cmd);
          if(FileMaker::isError($result)){ 
            return "ERROR: code=".$result->getCode()."\n".$result->getMessage();
            }

      
    }
    
    
    protected function addToFileMaker($array, $KeyArray, $cmd){    

            foreach ($KeyArray as $key => $value) {
               
                if (isset($array[$key])){
                $cmd->setField($value, $array[$key]);
                } 
            }
                return $cmd->execute(); 
    }
}

?>

