<?php
require_once('errorReport.php');
$error = new errorReport($_GET);
require_once("MyFileMakerWrapper.php");


if (array_key_exists("name",$_GET)){
	$name = $_GET['name'];
}else{ 
	header("location: index.php");
	}

$fm = new MyFileMakerWrapper;
// $fm->address = 'http://192.168.5.6';

$connect = $fm->connect();
$rezult = $fm->isConnected($connect);
if (!$rezult){
	$error->report($name . ' - Error,  connect is - ' . $rezult);
 	die();
}

    $runscript=$connect->newPerformScriptCommand('CompanyForPHP','SortCompany');
	$result=$runscript->execute();
	if (FileMaker::isError($result)) { $error->report($name . " - Error,There was a problem running the script - " . $result->getMessage()); die($result->getMessage()); } 


	$records = $result->getRecords(); 
	$foundSet = $result->getFoundSetCount(); 
	//$fields = $result->getFields; echo '<p>Records Found: ' .$foundSet.'</br>';// <-- Returns 3 (the correct found set) 
	
	$companyName = array();
	foreach ($records as $record) { 

		$array['name']= $record->getField('Company_Name'); 
		$array['id'] = $record->getField('__pkCompanyID'); 

		array_push($companyName, $array);	 
	} 
	
	$companyName = json_encode($companyName);

	

		require_once("head.html");
		require_once("header.html");

		 if($_GET['name'] == "inspection"){
			require_once("survei.html");		
		 }elseif ($_GET['name'] == "sampling"){
		 	require_once("sampling.html");
		 }else{
		 header("location: index.php");	
		 }		
		require_once("footter.html");
	


	 //localhost/os/lzh_application/application.php?name="sampling" 
?>

