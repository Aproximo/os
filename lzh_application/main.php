<?php





// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Method Not Allowed", false, 405 );
    exit();
    }else{
  
    $setCookie = [
    'Operator_name_id',
    'Mandator_name_id',
    'Mandator_Name',
    'Operator_Name',
    'Contact_person',
    'Phone',
    'Email'
    ];

   
function setCOOKIEs ($array){

    foreach ($array as $value) { 
        if (array_key_exists($value, $_POST)){
           SetCookie($value, $_POST[$value], time()+60*60*24*30); 
        }
    }
}

setCOOKIEs($setCookie);

require_once('errorReport.php');
$error = new errorReport($_POST);
require_once("data.php");
require_once("WordMaker.php");
require_once("MyFileMakerWrapper.php");
require_once('../PHPMailer/class.phpmailer.php');



 


// $FromItems = [
//     'dayaSelect',
//     'monthSelect',
//     'yearSelect',
//     'Mandator_Name',
//     'Mandator_name_id',
//     'Operator_Name',
//     'Operator_name_id',
//     'Region',
//     'District',
//     'Settlement',
//     'Street',
//     'Build_number',
//     'save_product_place',
//     'save_product',
//     'Name_number',
//     'Product_name',
//     'lot_amount',
//     'units_name',
//     'lot_name',
//     'Year_of_harvest',    
//     'Survei_company',
//     'file_survei_company',
//     'additional_parameters',
//     'Contact_person',
//     'Phone',
//     'Email',
//     'agreePay'];

$ValidationItems = [
    'dayaSelect',
    'monthSelect',
    'yearSelect',
    'Mandator_Name',
    'Mandator_name_id',
    'Operator_Name',
    'Operator_name_id',
    'Settlement',
    'Street',
    'save_product_place',
    'save_product',
    'Name_number',
    'Product_name',
    'lot_amount',
    'units_name',
    'lot_name',
    'Year_of_harvest',    
    'Contact_person',
    'Phone',
    'Email',
    'importer',
    'confirm_car',
    'agreePay'];

$keysForGeneralArray = [
    'type_of_app_name',
    'application_id',
    'ip',
    'date',
    // 'Mandator_Name',
    'Mandator_name_id',
    // 'Operator_Name',
    'Operator_name_id',
    'Region',
    'District',
    'Settlement',
    'Street_build',
    'save_product_place',
    'save_product',
    'Name_number',
    'Product_name',
    'lot_amount',
    'units_name',
    'lot_name',
    'Year_of_harvest',
    'Survei_company',    
    'additional_parameters',
    'importer',
    'confirm_car',
    'Contact_person',
    'Phone',
    'Email',
    'coments',
    'agreePay'];

    if ($_POST["agreePay"] == "on"){
        $_POST["agreePay"] = 1;
    } else {
        $_POST["agreePay"] = 0;
}

  
   

$dbKeys = [
    'type_of_app_name' => 'Type',
    'application_id' => 'webApplicationId',
    'ip' => 'ipApplicationCreated',
    'date' => 'Date_Sampling',
    'Mandator_name_id' => '_fkMandatorID',
    'Operator_name_id' => '_fkOperatorID',
    'Region' => 'Address_Region',
    'District' => 'Address_District',
    'Settlement' => 'Address_City',
    'Street_build' => 'Address_Street',
    'save_product_place' => 'Sampling_Place',
    'save_product' => 'ProductStoringMethod',
    'Product_name' => 'ProductName',
    'lot_amount' => 'LotQuantity',
    'units_name' => 'LotUnit',
    'lot_name' => 'LotNo',
    'Year_of_harvest' => 'Year_Harvest', 
    'additional_parameters' => 'Additional_parameters',
    'Contact_person' => 'Contact_Name',
    'Phone' => 'Phone',
    'Email' => 'Email',
    'agreePay' => 'agreePay',
    'file_survei_company_name' => 'SurveiCompanyDocFileName',
    'word_app_name' => 'SamplingReportFileName',
    'importer' => 'Importer_aplication_name',
    'confirm_car' => 'confirm_car',
    'coments' => 'coment'
];

 switch ($_POST['save_product_place']) {
        case '1':
            $dbKeys['Name_number'] = 'FieldNo';
            break;
        case '2':
            $dbKeys['Name_number'] = 'WarehouseNo';
            break;
        case '3':
            $dbKeys['Name_number'] = 'RefrigeratorNo';
            break;
        default:
             $error->report('Wrong value in save product place');
             die();
            break;
    };

    if (array_key_exists("Survei_company", $_POST)){
        $dbKeys['Survei_company'] = 'Survei_company';
    }

$keyConteiners = [
    'file_survei_company',
];



function validation_on_Empty($array){
    
    foreach ($array as $value) { 
        if (!array_key_exists($value, $_POST)){        
            return false;        
        }elseif (is_null($_POST[$value])) {
            return false;        
        }
    }
return true;
}

$valid = validation_on_Empty ($ValidationItems);

if (!$valid){
     $error->report("ERROR no valid information");
     die();
}



    $_POST["ip"] = $_SERVER["REMOTE_ADDR"];     // get an IP address
    $_POST["application_id"] = uniqid();         // id of application 
    $_POST["date"] = $_POST['dayaSelect'] . "." . $_POST['monthSelect'] . "." . $_POST['yearSelect'];
    if (empty($_POST['Build_number'])){
      $_POST["Street_build"] =$_POST["Street"];
      }else{
    $_POST["Street_build"] =$_POST["Street"] . " ," . $_POST["Build_number"]; 
    }

    

  

    function addContainerName ($arrayContainer){
        
        foreach ($arrayContainer as $value) {
            if (array_key_exists($value, $_FILES)){
                $arrayOwn[$value. "_name"] = $_FILES[$value]["name"];
            }
        }
        return $arrayOwn;
}

  

$generaConteinersArray = addContainerName($keyConteiners);



$keyForWordStaticArray = ['Mandator_Name',
'Operator_Name',
'address',
'lot_amount',
'save_product_place',
'save_product',
'Name_number',
'lot_name',
'units_name',
'Product_name',
'Year_of_harvest'];
    

    // Тут я створюю ворд файл II 2-OT-02 Sampling sheet_v12_enua_temp.docx Для відбирача та додаю в масив з іменами контейнерів

    $wordparser = new Data ($keyForWordStaticArray, $_POST);
    $generalWord = $wordparser->GetData();

    switch ($generalWord['save_product_place']) {    // Зміна цифрових значень на зручні для розуміння
         case '1':
             $generalWord['save_product_place'] = 'поле';
             break;
          case '2':
             $generalWord['save_product_place'] = 'склад';
             break;
         default:
              $generalWord['save_product_place'] = 'ERROR - undefined value';
             break;
     } 

     switch ($generalWord['save_product']) {        // Зміна цифрових значень на зручні для розуміння
        case '1':
             $generalWord['save_product'] = 'Біг-бег';
            break;
        case '2':
             $generalWord['save_product'] = 'Насипом';
            break;
              case '3':
             $generalWord['save_product'] = 'Упаковка';
            break;
        case '4':
             $generalWord['save_product'] = 'Зерновий рукав';
            break;
        default:
              $generalWord['save_product'] = 'ERROR - undefined value';
             break;
     } 

    switch ($generalWord['units_name']) {    // Зміна цифрових значень на зручні для розуміння
         case '1':
             $generalWord['units_name'] = 'кг.';
             break;
          case '2':
             $generalWord['units_name'] = 'т.';
             break;
             case '3':
             $generalWord['units_name'] = 'л.';
             break;
         default:
              $generalWord['units_name'] = 'ERROR - undefined value';
             break;
     } 
    
    $time = date("d.m.Y_H-i-s");
    $word = new WordMaker();    
    $temlate = "./Word_temp/II 2-OT-02 Sampling sheet_v12_enua_temp.docx";
    $file_name = $_POST['application_id']."_created_on_$time.docx";
    $saveAs = "./wordsFile/" . $file_name;
    $word->sendData($generalWord, $temlate, $saveAs);  
    $generaConteinersArray["word_app_name"] = $file_name;
    // -----------------------------------------------------------------------


    $parser = new Data ($keysForGeneralArray, $_POST);
    $parser->addGeneralData($generaConteinersArray);
 
  
    $fm = new MyFileMakerWrapper;
    // $fm->address = 'http://192.168.5.6';

    $connect = $fm->connect();
    $rezult = $fm->isConnected($connect);
    if (!$rezult){  $error->report('connect is - ' . $rezult); die();}

    $fmError = $parser->insertToFilemaker($connect, $dbKeys, "Sampling form for PHP");
    print_r($fmError);
    if($fmError){
        $error->report($fmError);
        die();
    }

    // $parser->insertToFilemaker($connect, "APPLICATION_SAMPLS");


// Залити файли з inputs type=[File] на сервер
    foreach ($_FILES as $key => $value) {        
        $target_path = "uploads/";// where the files will end up this path must be "writable" and "readable" by the web and it's relative to your site folder.
        $fname = basename($_FILES[$key]['name']);// Set the filename
        $target_path = $target_path . $fname; // Set the destination for the file so PHP can move it
        if($fname != ''){
        // the file was sucessfully posted to the web server
        if(!move_uploaded_file($_FILES[$key]['tmp_name'], $target_path)) {
             $error->report("The file ". $fname . " hasn't been uploaded and moved to the right place");
             die();
    }}
        // the file successfully moved from the PHP temp folder to the "uploads/" folder
    }


        $runscript=$connect->newPerformScriptCommand('Sampling form for PHP','PHP', $_POST["application_id"]);
            $runscriptresult=$runscript->execute();
                if (FileMaker::isError($runscriptresult)) { 
                     $error->report("There was a problem running the script - " . $runscriptresult->getMessage());
                     die();
                } 



    



    //send email to office
    $bodytext = "Замовник - ".$_POST['Mandator_Name']."<br>
    Оператор - " . $_POST['Operator_Name'] . "<br>
    Створили нову заявку!";
    
    $email = new PHPMailer();
    $email->From      = 'office@organicstandard.com.ua';
    $email->FromName  = 'OrganicStandard';
    $email->Subject   = 'New sampling application';
    $email->isHTML(true); 
    $email->Body      = $bodytext;
    $email->AddAddress( 'romaniuk.o@organicstandard.ua' );
    $email->addReplyTo($_POST['Email']);

    // $email->addCC('lzh@organicstandard.com.ua')    

    $email->Send();

    //send email to client
    $bodytext = "Дякуємо за заявку, вона буде опрацьована найближчим часом";
    // require_once('./PHPMailer/class.phpmailer.php');
    $email = new PHPMailer();
    $email->From      = 'sampling@organicstandard.com.ua';
    $email->FromName  = 'OrganicStandard';
    $email->Subject   = 'New sampling application';
    $email->Body      = $bodytext;
    $email->AddAddress( 'romaniuk.o@organicstandard.ua');
    $email->addReplyTo("sampling@organicstandard.com.ua");
   

    $email->Send();



 





            if (file_exists('./uploads')){
        foreach (glob('./uploads/*') as $file){
        unlink($file);
    }}
     if (file_exists('./wordsFile')){
        foreach (glob('./wordsFile/*') as $file){
        unlink($file);
    }}

    header("location: exit.php");   
}
?>
