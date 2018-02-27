<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "Request not from form. ERROR - 404";
    die();
}else{ 
    echo "<pre>";
    var_dump($_POST);

    $setCookie = [
    'Operator_id',
    'Mandator_id',
    'Mandator_Name',
    'Operator_Name',
    'Contact_person',
    'Phone',
    'Email'
    ];

   
function setCOOKIEs ($array){

    for ($i=0; $i < $array; $i++) { 
        if (array_key_exists($array[$i],$_POST)){
           SetCookie($array[$i], $_POST[$array[$i]]); 
        }
    }
}

setCOOKIEs($setCookie);


require_once("parser.php");
require_once("WordMaker.php");
require_once("MyFileMakerWrapper.php");

$FromItems = [
    'dayaSelect',
    'monthSelect',
    'yearSelect',
    'MandatorName',
    'OperatorName',
    'Region',
    'District',
    'Settlement',
    'Street',
    'Build_number',
    'save_product_place',
    'save_product',
    'Name_number',
    'Product_name',
    'lot_amount',
    'units_name',
    'lot_name',
    'Year_of_harvest',    
    'Survei_company',
    'file_survei_company',
    'additional_parameters',
    'Contact_person',
    'Phone',
    'Email',
    'agreePay'];

$ValidationItems = [
    'dayaSelect',
    'monthSelect',
    'yearSelect',
    'MandatorName',
    'OperatorName',
    'Region',
    'District',
    'Settlement',
    'Street',
    'Build_number',
    'save_product_place',
    'save_product',
    'Name_number',
    'Product_name',
    'lot_amount',
    'units_name',
    'lot_name',
    'Year_of_harvest',    
    'Survei_company',
    'file_survei_company',
    'Contact_person',
    'Phone',
    'Email',
    'agreePay'];



$valid = validation_on_Empty ($ValidationItems);
if (!$valid){
    die("ERROR");
}


function validation_on_Empty($array){
    for ($i=0; $i < $array; $i++) { 
       if (!array_key_exists($array[i], $_POST)) {return false;}
    }
return true;
}

die();
   $div_counter = array();

    $_POST["ip"] = $_SERVER["REMOTE_ADDR"];     // get an IP address
    $_POST["application_id"] = uniqid();         // id of application 
    $_POST["date"] = $_POST['dayaSelect'] . "." . $_POST['monthSelect'] . "." . $_POST['yearSelect'];



    

    

  foreach ($_POST as $key => $value) {
             $str = substr($key, 0, 11);
        if ($str == "div_counter") {
             array_push($div_counter, $value);
        }               
    }

    function addContainerName ($arrayContainer){
        
        foreach ($arrayContainer as $value) {
            if (array_key_exists($value, $_FILES)){
                $arrayOwn[$value. "_name"] = $_FILES[$value]["name"];
            }
        }
        return $arrayOwn;
}

  
$keysForGeneralArray = [
    'Mandator_id',
    'Operator_id',
    'Mandator_Name',
    'Operator_Name',
    'date',
    'ip',
    'Operator_Name',
    'Equpment',
    'For_labolatory',
    'Survei_company',
    'Transpot_yourself',
    'Labolatory_list',
    'additional_parameters',
    'Sealing',
    'Big_bags',
    'Storeg',
    'Loading_inspection',
    'Contact_person',
    'Phone',
    'Email',
    'agreePay'];

$keyConteiners = [
    'lab_acreditation',
    'file_survei_company',
    'iso_file'];

$generaConteinerslArray = addContainerName($keyConteiners);

$keysForDynamicArray = [
    'Region',
    'District',
    'Settlement',
    'Street',
    'Build_number',
    'storeg_or_field',
    'Storeg_number',
    'Product_name',
    'lot_amount',
    'lot_name',
    'Year_of_harvest',
    'Save_product'];

$keyForWordStaticArray = ['Mandator_Name',
'Operator_Name'];
$keyForWordDynamicArray = [
'address',
'storeg_or_field',
'lot_amount',
'Storeg_number',
'lot_name',
'Product_name',
'Year_of_harvest'];

 $sufixes[0] = 0;
if (count($div_counter)>1){
foreach ($div_counter as $value) {
    if ( $value > 0) {
         array_push($sufixes, "_" . $value);
    }
}}


    $parser = new Parser ($keysForGeneralArray, $keysForDynamicArray, $sufixes, $_POST);
    $parser->addGeneralData($generaConteinerslArray);
  //  $generalArray = $parser->getGeneralData();


    foreach ($sufixes as $value) {     
        $repeatedArray[$value] = $parser->getRepeatedData($value);
    }


    $fm = new MyFileMakerWrapper;
    $fm->address = 'http://192.168.5.6';

    $connect = $fm->connect();
    $rezult = $fm->isConnected($connect);
    if (!$rezult){ echo 'connect is - ' . $rezult; die();}

    $parser->insertToFilemaker($connect, "APPLICATION_SAMPLS", "APPLICATION_SAMPLS_STRING", $sufixes);

    $wordparser = new Parser ($keyForWordStaticArray, $keyForWordDynamicArray, $sufixes, $_POST);

    $generalWord = $wordparser->getGeneralData();


// Залити файли з inputs type=[File] на сервер
    foreach ($_FILES as $key => $value) {
        
        $target_path = "uploads/";// where the files will end up this path must be "writable" and "readable" by the web and it's relative to your site folder.
        $fname = basename($_FILES[$key]['name']);// Set the filename
        $target_path = $target_path . $fname; // Set the destination for the file so PHP can move it
        if($fname != ''){
        // the file was sucessfully posted to the web server
        if(move_uploaded_file($_FILES[$key]['tmp_name'], $target_path)) {echo "The file ". $fname . " has been uploaded and moved to the right place";}}
        // the file successfully moved from the PHP temp folder to the "uploads/" folder
    }


        $runscript=$connect->newPerformScriptCommand('APPLICATION_SAMPLS','PHP', $_POST["application_id"]);
            $runscriptresult=$runscript->execute();
                if (FileMaker::isError($runscriptresult)) { echo "There was a problem running the script - " ; die($runscriptresult->getMessage()); } 

    foreach ($sufixes as $value) {       
        $repeatedWord[$value] =  $wordparser->getRepeatedData($value);
    }  

    $time = date("d.m.Y_H-i-s");
    $word = new WordMaker();    
    $temlate = "./Word_temp/II 2-OT-02 Sampling sheet_v12_enua_temp.docx";
        
    foreach ($sufixes as $value) {
         $saveAs[$value] = "./wordsFile/".$_POST['application_id']."_created_on_$time".$value.".docx";
        $word->sendData(array_merge($generalWord, $repeatedWord[$value]), $temlate, $saveAs[$value]);  
    }



    //send email to office
    $bodytext = "Замовник - ".$_POST['Mandator_Name']."<br>
    Оператор - " . $_POST['Operator_Name'] . "<br>
    Створили нову заявку!";
    require_once('./PHPMailer/class.phpmailer.php');
    $email = new PHPMailer();
    $email->From      = 'office@organicstandard.com.ua';
    $email->FromName  = 'OrganicStandard';
    $email->Subject   = 'New sampling application';
    $email->isHTML(true); 
    $email->Body      = $bodytext;
    $email->AddAddress( 'or@organicstandard.com.ua' );
    $email->addReplyTo($_POST['Email']);

    // $email->addCC('lzh@organicstandard.com.ua')    

    $email->Send();

    //send email to client
    $bodytext = "Дякуємо за заявку, вона буде опрацьована найближчим часом";
    require_once('./PHPMailer/class.phpmailer.php');
    $email = new PHPMailer();
    $email->From      = 'sampling@organicstandard.com.ua';
    $email->FromName  = 'OrganicStandard';
    $email->Subject   = 'New sampling application';
    $email->Body      = $bodytext;
    $email->AddAddress( 'or@organicstandard.com.ua');
    $email->addReplyTo("sampling@organicstandard.com.ua");
   

    $email->Send();


 





            if (file_exists('./uploads')){
        foreach (glob('./uploads/*') as $file){
        unlink($file);
    }}
    //  if (file_exists('./wordsFile')){
    //     foreach (glob('./wordsFile/*') as $file){
    //     unlink($file);
    // }}

       header("location: exit.php");
}
?>
