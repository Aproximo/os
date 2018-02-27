<?php
require_once 'PHPWord.php';

class WordMaker
{
    public function sendData($array, $templateDocName, $save_as)
    {
        $PHPWord = new PHPWord();
        $document = $PHPWord->loadTemplate("$templateDocName");
 
        
        foreach ($array as $key => $value) {        	
            $document->setValue($key, $value);
        }
      
    
        $document->save("$save_as");
        // echo "<pre>";
        // var_dump($document);
        // echo "I save it44";
       
    }
}
?>