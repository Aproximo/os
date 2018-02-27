<?php

require_once('../PHPMailer/class.phpmailer.php');


/**
* 
*/
class errorReport 
{   private $array;

     public function __construct($array)
    {
       $this->array = $array;
       
    }
	
	public function report($body, $name = 'PHP_sampling_error', $header = 'There was a problem running the script',  $to = "romaniuk.o@organicstandard.ua")
	{ 
        if (array_key_exists("Email", $this->array)) {
           $email = $this->$array['Email'];
       }else{
          $email = "no information";
        }
        

        if (array_key_exists("Phone", $this->array)) {
           $phone = $this->$array['Pphone'];
       }else{
          $phone = "no information";
        }

         if (array_key_exists("Contact_person", $this->array)) {
           $Contact_person = $this->$array['Contact_person'];
       }else{
          $Contact_person = "no information";
        }
    

        $body = $body . "\n\r"
                    ."on line - " . __LINE__ . "\n\r"
                    . "email - " . $email . "\n\r"
                    . "Contact_person - " . $Contact_person . "\n\r"
                    . "Phone - " . $phone;
	
	$email = new PHPMailer();
    $email->From      = 'or@organicstandard.com.ua';
    $email->FromName  = $name;
    $email->Subject   = $header;
    $email->isHTML(true); 
    $email->Body      = $body;
    $email->AddAddress( $to );
    $email->Send();

    header("location: error.php");

	}
 
}



